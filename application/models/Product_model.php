<?php
		    class Product_model extends MY_Model{

		    	public function get_product($id = null)
					{
						$this->db->select('product.*,category.Name as category,sub_category.Name as sub_category')
								 ->from('product')->join('category', 'category.id = product.Category')->join('sub_category', 'sub_category.id = product.Sub_Category', 'left')->group_by('product.id'); if ($id != null) {
								$this->db->where('product.user_id', $id);
							}return $this->db->get()->result_array();
					}
					public function get_product_ledger($id)
					{
						$this->db->select('product_ledger.* , ven.Name, w_order.item_desc , req.wo_id as req_wo_id , req.type , wo_order.item_desc as wo_order_item_desc')
								 ->from('product_ledger')
								->join('vednor ven' , 'ven.id =  product_ledger.supplier', 'left')
								->join('requisition req' , 'req.id =  product_ledger.requisition', 'left')
								->join('work_orders wo_order' , 'wo_order.id =  req.wo_id', 'left')
								->join('work_orders w_order' , 'w_order.id =  product_ledger.job_card_no', 'left');
								 $this->db->where('product_ledger.product_id', $id);
								 return $this->db->get()->result_array();
					}


				}