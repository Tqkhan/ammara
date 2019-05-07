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

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $vendor_id = $_POST['sup'];
            $product_id = $_POST['product_id'];
            $explode_date = explode('-', $_POST['daterange']);

            $current_date = $explode_date[0];
            $str_currentdate = strtotime($current_date);
            $str_current_day = date('Y-m-d' , $str_currentdate );

            $last_date = $explode_date[1];
            $str_last_date = strtotime($last_date);
            $str_last_day = date('Y-m-d' , $str_last_date );
            $this->data['str_current_day_show'] = $current_date;
            $this->data['str_last_date_show'] = $last_date;

            $this->data['purchases_log'] = $this->Reports_model->purchases_log($vendor_id , $product_id , $str_current_day , $str_last_day);
            // echo "<pre>";
            // print_r($this->data['purchases_log']);
            // die();
        }
        else{
            $this->data['purchases_log'] = [];
        }


        $this->data['title'] = 'Purchases Report';
        
        $this->data['permission'] = $this->permission;
        $this->data['vednor'] = $this->Reports_model->all_rows('vednor');
        $this->data['product'] = $this->Reports_model->all_rows('product');
        $this->load->template('reports/purchases_report',$this->data);
    }

    public function product_report()
    {
        if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
        {
            redirect('home');
        }

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $product_id = $_POST['product_id'];
            
            $this->data['product_log'] = $this->Reports_model->product_log($product_id);
            // echo "<pre>";
            // print_r($this->data['product_log']);
            // die();
        }
        else{
            $this->data['product_log'] = [];
        }


        $this->data['title'] = 'Product Report';
        
        $this->data['permission'] = $this->permission;
        $this->data['vednor'] = $this->Reports_model->all_rows('vednor');
        $this->data['product'] = $this->Reports_model->all_rows('product');
        $this->load->template('reports/product_report',$this->data);
    }

}