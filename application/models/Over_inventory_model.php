<?php
class Over_inventory_model extends MY_Model{

	public function get_stock($id)
	{
		$this->db->select('f.Name,sum(rp.pending_quantity) as qty,p.Product_Name, p.id ,  rp.id as rp_id,  rp.return_status , r.wo_id')
				 ->from('flows f')
				 ->join('requisition r', 'r.type=f.Name')
				 ->join('requisition_product rp','r.id = rp.requisition_id')
				 ->join('product p', 'p.id=rp.product_id')
				 ->where('f.id',$id)
				 ->group_by('f.id')
				 ->having('qty > 0');
		return $this->db->get()->result_array();
	}
	public function get_stock_new($id, $sup_id)
	{
		$this->db->select('f.Name,rp.pending_quantity as qty,p.Product_Name, p.id ,  rp.id as rp_id,  rp.return_status , r.wo_id,r.id as req_id')
				 ->from('flows f')
				 ->join('requisition r', 'r.type=f.Name')
				 ->join('requisition_product rp','r.id = rp.requisition_id')
				 ->join('product p', 'p.id=rp.product_id');
				 if ($sup_id == TRUE) {
		 		 	$this->db->where('r.store_id', $sup_id);
		 			}
				 $this->db->where('f.id',$id)
				 // ->group_by('f.id')
				 ->having('qty > 0');
		return $this->db->get()->result_array();
	}
}