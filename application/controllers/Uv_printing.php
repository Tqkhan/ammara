<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uv_printing extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('uv_printing_model');
        $this->module = 'uv_printing';
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
            $this->data['orders'] = $this->uv_printing_model->get_flow('UV Printing',null);
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->uv_printing_model->get_flow('UV Printing',null,$this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('uv_printing/index',$this->data);
    }

}