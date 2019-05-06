<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->module = 'user';
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
        $this->data['title'] = 'Users';
        if ( $this->permission['view_all'] == '1'){
            $this->data['users'] = $this->User_model->get_users();
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['users'] = $this->User_model->get_users($this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('user/index',$this->data);
    }

    public function create()
    {
        if ( $this->permission['created'] == '0') 
        {
            redirect('home');
        }
        $this->data['title'] = 'Create User';
        $this->data['role'] = $this->User_model->all_rows('user_type');
        $this->data['sub_store'] = $this->User_model->all_rows('sub_store');
        $this->load->template('user/create',$this->data);
    }

    public function insert()
    {
        if ( $this->permission['created'] == '0') 
        {
            redirect('home');
        }
        // $imp_sub_stores = implode(",",$_POST['sub_stores']);
       
        // print_r($imp_sub_stores);die();
        // $_POST = $this->input->post();
        $username = $this->User_model->get_row_single('users',array('name'=>$_POST['name']));
        if (!empty($username)) {
            $this->session->set_flashdata('error', 'Username Already Exist');
            redirect("users/create");
        }
        $email = $this->User_model->get_row_single('users',array('email'=>$_POST['email']));
        if (!empty($email)) {
            $this->session->set_flashdata('error', 'Email Already Exist');
            redirect("users/create");
        }
        $_POST['password'] = md5($_POST['password']);

        $data=array(

          'name'=>$_POST['name'],
          'email'=>$_POST['email'],
          'password'=>$_POST['password'],
          'role'=>$_POST['role'],
          'alow_sub_store'=>$_POST['alow_sub_store'],
          'sub_stores_id'=>$_POST['sub_stores'],
        );

        $id = $this->User_model->insert('users',$data);
        if ($id) {
            redirect('users');
        }
    }

    public function edit($id)
    {
        if ($this->permission['edit'] == '0') 
        {
            redirect('home');
        }
        $this->data['title'] = 'Edit Module';
        $this->data['user'] = $this->User_model->get_row_single('users',array('id'=>$id));
        $this->data['role'] = $this->User_model->all_rows('user_type');
        $this->load->template('user/edit',$this->data);
    }

    public function update()
    {
        if ( $this->permission['edit'] == '0') 
        {
            redirect('home');
        }
        $data = $this->input->post();
        $id = $data['id'];
        unset($data['id']);
        if (!empty($data['password'])) {
            $data['password'] = md5($data['password']);
        }
        else{
            unset($data['password']);
        }
        $id = $this->User_model->update('users',$data,array('id'=>$id));
        if ($id) {
            redirect('users');
        }
    }

    public function delete($id)
    {
        if ( $this->permission['deleted'] == '0') 
        {
            redirect('home');
        }
        $this->User_model->delete('users',array('id'=>$id));
        redirect('users');
    }
}