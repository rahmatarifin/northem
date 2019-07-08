<?php 
class M_admin extends ci_model{

	function tampil(){
		return $this->db->get('admin')->result();
	}
	
	function tambah($data){
		return $this->db->insert('admin');
	}
}