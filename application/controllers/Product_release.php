<?php
class Product_release extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_release_model');
        $this->module     = 'product_release';
        $this->user_type  = $this->session->userdata('user_type');
        $this->id         = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module, $this->user_type);
    }
    public function index()
    {
        if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') {
            redirect('home');
        }
        $this->data['title'] = 'Product_release';
        $query = $this->db->query("SELECT * FROM users where id = ".$this->session->userdata('user_id')."");
        $row = $query->row_array();
        $sup_id = $row['sub_stores_id'];
        // print_r($row['sub_stores_id']);



        if ($this->permission['view_all'] == '1') {
            $this->data['product_release'] = $this->Product_release_model->get_product_release( $sup_id);
        } elseif ($this->permission['view'] == '1') {
            $this->data['product_release'] = $this->Product_release_model->get_product_release($this->id, $sup_id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('product_release/index', $this->data);
    }
    public function create()
    {
        if ($this->permission['created'] == '0') {
            redirect('home');
        }
        $this->data['title']           = 'Create Product_release';
        $this->data['table_sub_store'] = $this->Product_release_model->all_rows('sub_store');
        $this->data['table_category'] = $this->Product_release_model->all_rows('category');
        $this->load->template('product_release/create', $this->data);
    }
    public function insert()
    {
        if ($this->permission['created'] == '0') {
            redirect('home');
        }
        // echo "<pre>";
        // print_r($_POST);
        // die;
        // $data            = $this->input->post();
        $product_id = $this->input->post('product_id');
        $quantity = $this->input->post('quantity');
        // unset($data['quantity']);
        // unset($data['product_id']);

        $data = array(
            'Date'=>$this->input->post('Date'),
            'Reference_No'=>$this->input->post('Reference_No'),
            'Store'=>$this->input->post('Store'),
            'Status'=>$this->input->post('Status'),
            'Note'=>$this->input->post('Note'),
            'user_id'=>$this->session->userdata('user_id'),
        );



        // $data['user_id'] = $this->session->userdata('user_id');
        $id = $this->Product_release_model->insert('product_release', $data);
        if ($id) {
        	for ($i=0; $i < sizeof($product_id); $i++) { 
                $r = 0;
                if ($this->input->post('Status') == 'Complete') {
                    $r = $quantity[$i];
                }
        		$product[] = array(
        			'product_id'=>$product_id[$i],
        			'quantity'=>$quantity[$i],
        			'product_release_id'=>$id,
                    'received_quantity'=>$r,
        		);
        	}
        	$this->Product_release_model->insert_batch('product_release_product',$product);
            redirect('product_release');
        }
    }
    public function edit($id)
    {
        if ($this->permission['edit'] == '0') {
            redirect('home');
        }
        $this->data['title']           = 'Edit Product_release';
        $this->data['product_release'] = $this->Product_release_model->get_row_single('product_release', array(
            'id' => $id
        ));
        $this->data['table_sub_store'] = $this->Product_release_model->all_rows('sub_store');
        $this->load->template('product_release/edit', $this->data);
    }
    
    public function update()
    {
        if ($this->permission['edit'] == '0') {
            redirect('home');
        }
        $data = $this->input->post();
        $id   = $data['id'];
        unset($data['id']);
        $id = $this->Product_release_model->update('product_release', $data, array(
            'id' => $id
        ));
        if ($id) {
            redirect('product_release');
        }
    }
    public function delete($id)
    {
        if ($this->permission['deleted'] == '0') {
            redirect('home');
        }
        $this->Product_release_model->delete('product_release', array(
            'id' => $id
        ));
        redirect('product_release');
    }
    public function change_status($id,$status)
    {
    	$id = $this->Product_release_model->update('product_release', array('Status'=>$status), array(
            'id' => $id
        ));
            redirect('product_release');
        
    }

    public function get_order($id)
    {
        $data = $this->Product_release_model->get_order_product($id);
        //print_r($this->db->last_query());
        echo json_encode($data);
    }

    public function received_order()
    {
        $id = $this->input->post('id');
        $detail_id = $this->input->post('detail_id');
        $received_quantity = $this->input->post('received_quantity');
        $this->Product_release_model->update('product_release', array('Status'=>'Complete'), array('id' => $id));
        for ($i=0; $i < sizeof($detail_id); $i++) { 
            $this->Product_release_model->update('product_release_product', array('received_quantity'=>$received_quantity[$i]), array('id' => $detail_id[$i]));
        }
        redirect('product_release');
    }
    public function view_product_release($id)
    {
        
        $this->data['title'] = 'View Product Release';
        $this->data['permission'] = $this->permission;
        $this->data['products'] = $this->Product_release_model->products_detail_get($id);
        $this->load->template('product_release/view_product_release', $this->data);
    }
}