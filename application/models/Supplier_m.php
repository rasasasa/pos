<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_m extends CI_Model {

    public function get($id = null)
	{
		$this->db->from('user');
		if($id != null) {
			$this->db->where('user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}
}
//test