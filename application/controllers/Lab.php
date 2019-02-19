<?php
		    class Lab extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Lab_model');
	        $this->module = 'lab';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Lab';
			if ( $this->permission['view_all'] == '1'){$this->data['lab'] = $this->Lab_model->all_rows('lab_order');}
			elseif ($this->permission['view'] == '1') {$this->data['lab'] = $this->Lab_model->get_rows('lab_order',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('lab/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Lab';$this->load->template('lab/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}

			$data=array(
              'st_number'=>$_POST['st_number'],
              'date'=>$_POST['date'],
              'client'=>$_POST['client'],
              'customer_ref'=>$_POST['customer_ref'],
              'count'=>$_POST['count'],
              'qty'=>$_POST['qty'],
              'type'=>$_POST['type'],
              'special_instruction'=>$_POST['special_instruction'],
             
              );
			$data['user_id'] = $this->session->userdata('user_id');
			$id = $this->Lab_model->insert('lab_order',$data);

			if ($id) {

             
              for ($i=0; $i < count($_POST['code_no']); $i++) { 
                
                $data2=array(

                      'lab_order'=>$id,
                      'code_no'=>$_POST['code_no'][$i],
                      'code_name'=>$_POST['code_name'][$i],
                      'ref_no'=>$_POST['ref_no'][$i],
                      'remarks'=>$_POST['remarks'][$i]
                     
                     

                );
            $id2 = $this->Lab_model->insert('lab_detail',$data2);
            
            } 
              if ($id2) {
               redirect('lab');           
              }         
            }

		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Lab';
			$this->data['lab'] = $this->Lab_model->get_row_single('lab_order',array('id'=>$id));$this->load->template('lab/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Lab_model->update('lab_order',$data,array('id'=>$id));
			if ($id) {
				redirect('lab');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Lab_model->delete('lab_order',array('id'=>$id));
			redirect('lab');
		}

		public function lab_costing($id)
		{
			
			$this->data['title'] = 'Lab Costing';
			$this->data['lab'] = $this->Lab_model->get_row_single('lab_order',array('id'=>$id));
			$this->data['lab_detail'] = $this->Lab_model->get_rows('lab_detail',array('lab_order'=>$id));
			// print_r($this->data['lab_detail']);die;
			$this->load->template('lab/lab_costing',$this->data);
		}
		public function insert_lab_costing()
		{
			
			$data=array(
              'st_number'=>$_POST['st_number']
              );
			$data['user_id'] = $this->session->userdata('user_id');
			$id = $this->Lab_model->insert('lab_costing',$data);

			if ($id) {

             
              for ($i=0; $i < count($_POST['dyes_name']); $i++) { 
                
                $data2=array(

                      'lab_costing_id'=>$id,
                      'st_number'=>$_POST['st_number'],
                      'dyes_name'=>$_POST['dyes_name'][$i],
                      'age'=>$_POST['age'][$i],
                      'rate'=>$_POST['rate'][$i],
                      'Amount'=>$_POST['Amount'][$i]
                     
                     

                );
            $id2 = $this->Lab_model->insert('lab_costing_dyes',$data2);
            
            } 
              if ($id2) {
               for ($i=0; $i < count($_POST['chemical_name']); $i++) { 
                
                $data2=array(

                      'lab_costing_id'=>$id,
                      'st_number'=>$_POST['st_number'],
                      'chemical_name'=>$_POST['chemical_name'][$i],
                      'chemical_age'=>$_POST['chemical_age'][$i],
                      'chemical_rate'=>$_POST['chemical_rate'][$i],
                      'chemical_Amount'=>$_POST['chemical_Amount'][$i]
                     
                     

                );
            $id3 = $this->Lab_model->insert('lab_costing_chemical',$data2);
            
            }
            redirect('lab');          
              }         
            }

		}
		public function lab_costing_view($id)
		{
			
			$this->data['title'] = 'Lab Costing View';
			$this->data['lab'] = $this->Lab_model->get_row_single('lab_order',array('id'=>$id));
			$st_number = $this->data['lab']['st_number'];
			$this->data['lab_detail'] = $this->Lab_model->get_rows('lab_detail',array('lab_order'=>$id));
			$this->data['lab_costing_dyes'] = $this->Lab_model->get_rows('lab_costing_dyes',array('st_number'=>$st_number));
			$this->data['lab_costing_chemical'] = $this->Lab_model->get_rows('lab_costing_chemical',array('st_number'=>$st_number));

			// $str_number = $this->data['lab_costing_chemical'];
			 // print_r($this->data['lab_costing_dyes']);die;
			$this->load->template('lab/lab_costing_view',$this->data);
		}
	}