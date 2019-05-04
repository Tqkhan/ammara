<?php
class Requisition extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('requisition_model');
        $this->load->model('Quantity_adjustments_model');
        $this->module     = 'requisition';
        $this->user_type  = $this->session->userdata('user_type');
        $this->id         = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module, $this->user_type);
    }

    public function index()
    {
    	if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') {
            redirect('home');
        }
        $this->data['title'] = 'Requisition';
        if ( $this->permission['view_all'] == '1'){
			$this->data['requisition'] = $this->requisition_model->get_requisition();
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['requisition'] = $this->requisition_model->get_requisition($this->id);
		}
		$this->data['permission'] = $this->permission;
		$this->load->template('requisition/index',$this->data);
    }

    public function insert_production_plan_inv()
    {
        // echo "<pre>";
        // print_r($_POST);
        // die();
        $data = array(
            'wo_id'=>$this->input->post('wo_id'),
            'type'=>$this->input->post('type'),
            'store_id'=>$this->input->post('store_id'),
            'type'=>$this->input->post('type'),
            't_qty'=>$this->input->post('total_qty'),
            'status'=>"Pending",
            'user_id'=>$this->session->userdata('user_id'),
        );
        
        $id = $this->requisition_model->insert('requisition', $data);
        $this->requisition_model->update('work_orders', array('inv_status'=>"Pending"), array('id' => $this->input->post('my_wo_id')));
        if ($id) {
            for ($i=0; $i < sizeof($this->input->post('product_id')); $i++) { 
                $r = 0;
                $product[] = array(
                    'product_id'=>$this->input->post('product_id')[$i],
                    'quantity'=>$this->input->post('quantity')[$i],
                    'requisition_id'=>$id,
                    'received_quantity'=>$r,
                );
            }
            $this->requisition_model->insert_batch('requisition_product',$product);
            redirect('production_plan/index');
        }
        else{
            redirect('production_plan/index');
        }
    }
    public function insert()
    {
        // echo "<pre>";
        // print_r($_POST);
        // die();
    	$data            = $this->input->post();
        $product_id = $data['product_id'];
        $quantity = $data['quantity'];
        unset($data['quantity']);
        unset($data['product_id']);
        $data['user_id'] = $this->session->userdata('user_id');
        $id              = $this->requisition_model->insert('requisition', $data);
        if ($id) {
        	for ($i=0; $i < sizeof($product_id); $i++) { 
                $r = 0;
        		$product[] = array(
        			'product_id'=>$product_id[$i],
        			'quantity'=>$quantity[$i],
        			'requisition_id'=>$id,
                    'received_quantity'=>$r,
        		);
        	}
        	$this->requisition_model->insert_batch('requisition_product',$product);
            echo 1;
        }
        else{
        	echo 2;
        }
    }

    public function order($id,$type)
    {
        $this->data['title'] = 'Create Order';
        $this->data['id'] = $id;
        $this->data['type'] = $type;
        $this->data['url'] = $_GET['redirect'];
        $this->data['table_category'] = $this->requisition_model->all_rows('category');
        $this->data['table_store'] = $this->requisition_model->all_rows('sub_store');
        $this->load->template('requisition/order',$this->data);
    }

    public function change_status($id,$status)
    {
    	$id = $this->requisition_model->update('requisition', array('status'=>$status), array(
            'id' => $id
        ));
        if ($id) {
            redirect('requisition');
        }
    }

    public function get_order($id)
    {
        // $data = $this->requisition_model->get_order_product($id);
        $data = $this->requisition_model->get_order_product_new($id);
        //print_r($this->db->last_query());
        echo json_encode($data);
    }

    // public function received_order()
    // {
    //     $id = $this->input->post('id');
    //     $detail_id = $this->input->post('detail_id');
    //     $product_id = $this->input->post('product_id');
    //     $received_quantity = $this->input->post('received_quantity');
    //     $t_qty = $this->input->post('t_qty');
    //     $remarks = $this->input->post('remarks');
    //     $qty_post = $this->input->post('received_quantity');
    //     $total_r_qty = 0;
      
    //     foreach ($qty_post as $value) {
    //         $total_r_qty += $value;
    //     }

    //     if ($this->input->post('t_qty') == $total_r_qty) {
    //         $this->requisition_model->update('requisition', array('status'=>'Complete'), array('id' => $id));
    //     }else{
    //         $this->requisition_model->update('requisition', array('status'=>'Partial'), array('id' => $id));
    //     }
    //     for ($i=0; $i < sizeof($detail_id); $i++) { 
    //         $this->data['product_old_qty'] = $this->Quantity_adjustments_model->product_old_qty('product' , $product_id[$i]);
    //         $new_qty = $this->data['product_old_qty']['product_qty'] - $this->input->post('received_quantity')[$i];

    //         $this->requisition_model->update('product', array('product_qty'=>$new_qty), array('id' => $product_id[$i]));
    //         $this->requisition_model->update('requisition_product', array('received_quantity'=>$received_quantity[$i],'product_id'=>$product_id[$i],'remarks'=>$remarks[$i]), array('id' => $detail_id[$i]));
    //     }
    //     redirect('requisition');
    // }
    public function received_order()
    {
        $id = $this->input->post('id');
        $detail_id = $this->input->post('detail_id');
        $product_id = $this->input->post('product_id');
        $received_quantity = $this->input->post('received_quantity');
        $t_qty = $this->input->post('t_qty');
        $remarks = $this->input->post('remarks');
        $qty_post = $this->input->post('received_quantity');
        $total_r_qty = 0;
      
        foreach ($qty_post as $value) {
            $total_r_qty += $value;
        }

        $rec_qty = $this->input->post('rec_qty');

        $total_rec_qty = 0;
      
        foreach ($rec_qty as $value1) {
            $total_rec_qty += $value1;
        }
          $all_rec_qty =  $total_rec_qty + $total_r_qty;
        // echo $total_r_qty;

        // die();
        if ($this->input->post('t_qty') == $all_rec_qty) {
            $this->requisition_model->update('requisition', array('status'=>'Complete'), array('id' => $id));
        }else{
            $this->requisition_model->update('requisition', array('status'=>'Partial'), array('id' => $id));
        }
        for ($i=0; $i < sizeof($detail_id); $i++) { 
            $this->data['product_old_qty'] = $this->Quantity_adjustments_model->product_old_qty('product' , $product_id[$i]);
            $new_qty = $this->data['product_old_qty']['product_qty'] - $this->input->post('received_quantity')[$i];

            $this->requisition_model->update('product', array('product_qty'=>$new_qty), array('id' => $product_id[$i]));
            $new_r_qty = $this->input->post('rec_qty')[$i] + $received_quantity[$i];
            $data_r_product=array(
                'received_quantity'=> $new_r_qty,
                'product_id'=> $product_id[$i],
                'remarks'=> $remarks[$i],
            );
            $this->requisition_model->update('requisition_product',$data_r_product,array('id' => $detail_id[$i]));

            $ledger_detail = [
                'product_id'=>$product_id[$i],
                'qty' => $new_r_qty,
                'balance' => $new_qty,
                'job_card_no' => $this->input->post('wo_no'),
                'date' => date('Y-m-d'),
                'reference' => 'Credit',
            ];
            $this->requisition_model->insert('product_ledger', $ledger_detail);

        }
        redirect('requisition');
    }

    public function view_order($id,$type)
    {
        $this->data['title'] = 'View Order';
        $type = str_replace('_', ' ', $type);
        $this->data['orders'] = $this->requisition_model->get_all_orders($id,$type);
        $this->load->template('requisition/view_order',$this->data);
    }

    public function pending_quantity($id,$type)
    {
        $this->data['title'] = 'Pending Quantity';
        $type = str_replace('_', ' ', $type);
        $this->data['url'] = $_GET['redirect'];
        $this->data['orders'] = $this->requisition_model->get_all_orders($id,$type);
        $this->load->template('requisition/pending_quantity',$this->data);
    }

    public function submit_pending()
    {
        $data = $this->input->post();
        $redirect = $data['redirect'];
        $id = $data['id'];
        $pending = $data['pending'];
        for ($i=0; $i < sizeof($id); $i++) { 
            $this->requisition_model->update('requisition_product',array('pending_quantity'=>$pending[$i]),array('id'=>$id[$i]));
        }
        redirect($redirect);    
    }
}