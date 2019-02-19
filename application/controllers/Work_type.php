<?php
		    class Work_type extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Work_type_model');
	        $this->module = 'work_type';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Work_type';
			if ( $this->permission['view_all'] == '1'){$this->data['work_type'] = $this->Work_type_model->all_rows('work_type');}
			elseif ($this->permission['view'] == '1') {$this->data['work_type'] = $this->Work_type_model->get_rows('work_type',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('work_type/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Work_type';$this->load->template('work_type/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Work_type_model->insert('work_type',$data);
			if ($id) {
				redirect('work_type');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Work_type';
			$this->data['work_type'] = $this->Work_type_model->get_row_single('work_type',array('id'=>$id));$this->load->template('work_type/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Work_type_model->update('work_type',$data,array('id'=>$id));
			if ($id) {
				redirect('work_type');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Work_type_model->delete('work_type',array('id'=>$id));
			redirect('work_type');
		}}