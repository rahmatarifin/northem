<?php
class M_pen extends ci_model{
	function tampil(){
		return $this->db->get('penguji')->result();
	}

	function tambah($data){
		return $this->db->insert('penguji', $data);
	}

	function hapus($id_pen){
		$this->db->where('id_pen', $id_pen);
		return $this->db->delete('penguji');
	}

	function per_($id_pen){
		$this->db->where('id_pen', $id_pen);
		return $this->db->get('penguji')->result();
	}

	function edit($id_pen, $data){
		$this->db->where('id_pen', $id_pen);
		return $this->db->update('penguji', $data);
	}
}