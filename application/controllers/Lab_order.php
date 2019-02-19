<?php
		    class Lab_order extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Lab_order_model');
	        $this->module = 'lab_order';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Lab_order';
			if ( $this->permission['view_all'] == '1'){$this->data['lab_order'] = $this->Lab_order_model->all_rows('lab_order');}
			elseif ($this->permission['view'] == '1') {$this->data['lab_order'] = $this->Lab_order_model->get_rows('lab_order',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('lab_order/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Lab_order';$this->load->template('lab_order/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Lab_order_model->insert('lab_order',$data);
			if ($id) {
				redirect('lab_order');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Lab_order';
			$this->data['lab_order'] = $this->Lab_order_model->get_row_single('lab_order',array('id'=>$id));$this->load->template('lab_order/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Lab_order_model->update('lab_order',$data,array('id'=>$id));
			if ($id) {
				redirect('lab_order');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Lab_order_model->delete('lab_order',array('id'=>$id));
			redirect('lab_order');
		}}