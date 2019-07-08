<?php defined('BASEPATH') or exit('Not ');
class Penilai extends ci_controller{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != 'Online') {
			redirect(base_url('log'));
		}
		$this->load->model('m_penilai');
	}

	function index(){
		$data['title'] = $this->m_penilai->tampil();
		$this->load->view('penilai/tm', $data);
	}
}