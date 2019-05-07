<?php
class Reports_model extends MY_Model{
	public function purchases_log($vendor_id , $product_id , $str_current_day , $str_last_day)
	{
		$this->db->select('purchases.*, purchase_product.*,vednor.Name, product.Product_Name');
		$this->db->from('purchases');
		$this->db->join('purchase_product' , 'purchase_product.purchase_id =  purchases.id' , 'left');
		$this->db->join('vednor' , 'vednor.id =  purchases.Supplier' , 'left');
		$this->db->join('product' , 'product.id =  purchase_product.product_id' , 'left');
		if ($vendor_id == TRUE) {
	    	$this->db->where('purchases.Supplier' , $vendor_id );
		}
		if ($product_id == TRUE) {
	    	$this->db->where('purchase_product.product_id' , $product_id );
		}
		if ($str_current_day == TRUE) {
		    $this->db->where('purchases.Date >=' , $str_current_day );
			$this->db->where('purchases.Date <=' , $str_last_day );	
		}

		return $this->db->get()->result_array();
	}
	public function product_log($product_id)
	{
		$this->db->select('requisition.*, requisition_product.*, product.Product_Name');
		$this->db->from('requisition');
		$this->db->join('requisition_product' , 'requisition_product.requisition_id =  requisition.id' , 'left');
		$this->db->join('product' , 'product.id =  requisition_product.product_id' , 'left');
    	$this->db->where('requisition_product.product_id' , $product_id );
		return $this->db->get()->result_array();
	}
}