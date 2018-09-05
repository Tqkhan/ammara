<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coating_plane extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('coating_plane_model');
        $this->load->model('machine_flow_model');
        $this->module = 'coating_plane';
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
            $this->data['orders'] = $this->coating_plane_model->get_flow('coating','coating');
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->coating_plane_model->get_flow('coating','coating',$this->id);
        }
        //echo '<pre>';print_r($this->data);die;
        // print_r($this->db->last_query());
        // echo '<pre>';print_r($this->data['orders']);die;
        $this->data['permission'] = $this->permission;
        $this->load->template('coating_plane/index',$this->data);
    }

    public function view_machine($id,$flow)
    {
        $this->data['title'] = 'Coating Machine';
        $this->data['data'] = $this->coating_plane_model->get_row_single('coating',array('plane_id'=>$id,'flow_id'=>$flow));
        $this->data['data_complete'] = $this->coating_plane_model->get_row_single('coating_complete',array('print_id'=>$this->data['data']['id']));
        $this->data['data_hourse'] = $this->coating_plane_model->get_rows('coating_hourse',array('coating_id'=>$this->data['data_complete']['id']));
        $this->data['job'] = $this->machine_flow_model->get_job($id,$flow);
        //echo '<pre>';print_r($this->data);die;
        $this->load->template('coating_plane/view_machine',$this->data);
    }

}