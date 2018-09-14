<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flexo_label_machine extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Flexo_label_machine_model');
        $this->module = 'flexo_label_machine';
        $this->user_type = $this->session->userdata('user_type');
        $this->id = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module,$this->user_type);
    }

    public function index()
    {
        if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
        {
            redirect('home');
        }
        $this->data['title'] = 'Work Orders';
        if ( $this->permission['view_all'] == '1'){
            $this->data['orders'] = $this->Flexo_label_machine_model->get_flow('Flexo Label Machine',null);
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->Flexo_label_machine_model->get_flow('Flexo Label Machine',null,$this->id);
        }
        
        $this->data['permission'] = $this->permission;
        $this->load->template('flexo_label_machine/index',$this->data);
    }


}