<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stripping_report extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('stripping_report_model');
        $this->module = 'stripping_report';
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
            $this->data['orders'] = $this->stripping_report_model->get_flow('Stripping Report',null);
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->stripping_report_model->get_flow('Stripping Report',null,$this->id);
        }
        
        $this->data['permission'] = $this->permission;
        $this->load->template('stripping_report/index',$this->data);
    }


}