<?php
		    class Demmo_model extends MY_Model{

		    	public function get_asd($id = null)
					{
						$this->db->select('asd.*,coating.')
								 ->from('asd')->join('coating', 'coating.id = asd.name'); if ($id != null) {
								$this->db->where('asd.user_id', $id);
							}return $this->db->get()->result_array();
					}}