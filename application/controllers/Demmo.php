<?php
		    class Demmo extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Demmo_model');
	        $this->module = 'asd';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Demmo';
			if ( $this->permission['view_all'] == '1'){$this->data['demmo'] = $this->Demmo_model->get_asd();}
			elseif ($this->permission['view'] == '1') {$this->data['demmo'] = $this->Demmo_model->get_asd($this->id);}
			$this->data['permission'] = $this->permission;
			$this->load->template('demmo/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Demmo';$this->data['table_coating'] = $this->Demmo_model->all_rows('coating');$this->load->template('demmo/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Demmo_model->insert('asd',$data);
			if ($id) {
				redirect('demmo');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Demmo';
			$this->data['demmo'] = $this->Demmo_model->get_row_single('asd',array('id'=>$id));$this->data['table_coating'] = $this->Demmo_model->all_rows('coating');$this->load->template('demmo/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Demmo_model->update('asd',$data,array('id'=>$id));
			if ($id) {
				redirect('demmo');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Demmo_model->delete('asd',array('id'=>$id));
			redirect('demmo');
		}}