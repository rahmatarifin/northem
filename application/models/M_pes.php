<?php 
class M_pes extends ci_model{
	function tampil(){
		return $this->db->get('peserta')->result();
	}

	function tambah($data){
		return $this->db->insert('peserta', $data);
	}

	function per_u($user){
		$this->db->where('user', $user);
		return $this->db->get('peserta')->result();
	}

	function per_($id_pes){
		$this->db->where('id_pes', $id_pes);
		return $this->db->get('peserta')->result();
	}

	function edit($id_pes){
		$this->db->where('id_pes', $id_pes);
		return $this->db->update('peserta', $data);
	}

	function hapus($id_pes){
		$this->db->where('id_pes', $id_pes);
		return $this->db->delete('peserta');	
	}
}