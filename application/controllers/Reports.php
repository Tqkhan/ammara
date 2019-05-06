<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Reports_model');
        $this->load->model('machine_flow_model');
        $this->module = 'cutting';
        $this->user_type = $this->session->userdata('user_type');
        $this->id = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module,$this->user_type);
    }

    public function purchases_report()
    {
        if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
        {
            redirect('home');
        }
        $this->data['title'] = 'Purchases Report';
        
        $this->data['permission'] = $this->permission;
        $this->data['vednor'] = $this->Reports_model->all_rows('vednor');
        $this->data['product'] = $this->Reports_model->all_rows('product');
        $this->load->template('reports/purchases_report',$this->data);
    }

}