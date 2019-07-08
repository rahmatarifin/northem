<?php 
class M_log extends ci_model{

	public function cek_login($table, $where){
		return $this->db->get_where($table, $where);
	}
}