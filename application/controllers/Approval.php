<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approval extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('approval_model');
        $this->module = 'approval';
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
            $this->data['orders'] = $this->approval_model->get_item();
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->approval_model->get_item($this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('approval/index',$this->data);
    }

    public function approve($id)
    {
        $id = $this->approval_model->update('work_orders',array('approval'=>'1'),array('id'=>$id));
        if ($id) {
            redirect('approval');
        }
    }
    public function report_submit($id)
    {
        if ($this->permission['edit'] == '0') 
        {
            redirect('home');
        }
        if ($this->input->post()) {
            $data = $this->input->post();
            $data['order_id'] = $id;
            $data['user_id'] = $this->session->userdata('user_id');
            $config['upload_path']          = './uploads/work_order/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $config['max_size']             = 4100;
            $config['max_width']            = 41024;
            $config['max_height']           = 4768;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('file'))
            {
                $data['file'] = '/uploads/work_order/'.$this->upload->data('file_name');
            }
            $this->approval_model->update('work_orders',array('approval'=>'1'),array('id'=>$id));
            $id = $this->approval_model->insert('approval_report',$data);
            if ($id) {
                redirect('design');
            }
        }
        $this->data['title'] = 'Submit Report';
        $this->load->template('approval/report',$this->data);
    }

}