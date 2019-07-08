<?php 
class Peserta extends ci_controller{
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('status') != 'Online') {
			redirect(base_url('log'));
		}
		$this->load->model('m_pes');
	}

	function index(){
		$data['title'] = 'Home';
		$user = $this->session->userdata('nama');
		$data['account'] = $this->m_pes->per_u($user);
		$this->load->view('temp/head', $data);
		$this->load->view('peserta/menu', $data);
		$this->load->view('peserta/home');
		$this->load->view('temp/foot');
	}

	function prop_(){
		$data['title'] = 'Home';
		$user = $this->session->userdata('nama');
		$data['account'] = $this->m_pes->per_u($user);
		$this->load->view('temp/head', $data);
		$this->load->view('peserta/menu', $data);
		$data['files'] = $this->m_pes->per_u($user);
		$this->load->view('peserta/file', $data);
		$this->load->view('temp/foot');
	}

	function pdf__(){
		$id_pen = $this->input->post('id_pen');

		
	}

	function uload(){
		$data['title'] = 'Upload Files';
		$user = $this->session->userdata('nama');
		$data['account'] = $this->m_pes->per_u($user);
		$this->load->view('temp/head', $data);
		$this->load->view('peserta/menu');
		$data['ac'] = $this->m_pes->per_u($user);
		$this->load->view('peserta/ufile', $data);
		$this->load->view('temp/foot');
	}

	function do_upload(){
		$config['upload_path'] 		= './tmp/file/';
		$config['file_name']		= $this->input->post('id_pes');
		$config['overwrite']		= FALSE;
		$config['allowed_types'] 	= 'pdf';
		$config['max_size'] 		= 1000;

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('peserta/ufile', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());;
			redirect(base_url('peserta'));
		}
	}

	function pengumuman(){
		$data['title'] = 'Pengumuman';
		$user = $this->session->userdata('nama');
		$data['account'] = $this->m_pes->per_u($user);
		$this->load->view('temp/head', $data);
		$this->load->view('peserta/menu', $data);
		$this->load->view('pengumuman');
		$this->load->view('temp/foot');
	}

	function p(){
		$data['title'] = 'Pesan';
		$user = $this->session->userdata('nama');
		$data['account'] = $this->m_pes->per_u($user);
		$this->load->view('temp/head', $data);
		$this->load->view('peserta/menu', $data);
		//$this->load->view('pengumuman');
		$this->load->view('temp/foot');	
	}

	function akun(){
		$data['title'] = 'Account';
		$user = $this->session->userdata('nama');
		$data['account'] = $this->m_pes->per_u($user);
		$this->load->view('temp/head', $data);
		$this->load->view('peserta/menu', $data);
		$this->load->view('peserta/tentang', $data);
		$this->load->view('temp/foot');
	}

	function edit(){
		$data['title'] = 'Account';
		$user = $this->session->userdata('nama');
		$data['account'] = $this->m_pes->per_u($user);
		$this->load->view('temp/head', $data);
		$this->load->view('peserta/menu', $data);
		$this->load->view('peserta/tentang');
		$this->load->view('temp/foot');
	}
}