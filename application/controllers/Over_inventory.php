<?php
class Over_inventory extends MY_Controller{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('over_inventory_model');
        $this->load->model('Quantity_adjustments_model');
        $this->module = 'over_inventory';
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
		$this->data['title'] = 'Left Over Inventory';
		if ( $this->permission['view_all'] == '1'){
			$this->data['flows'] = $this->over_inventory_model->all_rows('flows');
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['flows'] = $this->over_inventory_model->get_rows('flows',array('user_id'=>$this->id));
		}
		$this->data['permission'] = $this->permission;
		$this->load->template('over_inventory/index',$this->data);
	}

	public function stock()
	{
		$this->data['title'] = 'Left Over Inventory';
		$query = $this->db->query("SELECT * FROM users where id = ".$this->session->userdata('user_id')."");
		$row = $query->row_array();
		$sup_id = $row['sub_stores_id'];
		$flow = $this->input->post('flow');
		$this->data['detail'] = $this->over_inventory_model->get_stock_new($flow , $sup_id);
		// echo "<pre>";
		// print_r($this->data['detail']);
		// die();
		$this->load->template('over_inventory/plane',$this->data);
	}

	public function add_to_product_qty($id, $qty, $rp_id , $req_id)
	{
		
		$this->data['product_old_qty'] = $this->Quantity_adjustments_model->product_old_qty('product' , $id);
            $new_qty = $this->data['product_old_qty']['product_qty'] + $qty;
		$this->over_inventory_model->update('product',array('product_qty'=>$new_qty),array('id' => $id));
		$this->over_inventory_model->update('requisition_product',array('return_status'=>'1'),array('id' => $rp_id));

		$ledger_detail = [
		    'product_id'=>$id,
		    'requisition' => $req_id,
		    'qty' => $qty,
		    'balance' => $new_qty,
		    'date' => date('Y-m-d'),
		    'reference' => 'Debit',
		];
		$this->over_inventory_model->insert('product_ledger', $ledger_detail);


			redirect(base_url().'over_inventory/index');
		
	}

}