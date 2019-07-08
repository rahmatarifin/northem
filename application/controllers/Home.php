<?php 
class Home extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_home');
		$this->load->model('m_log');
		$this->load->model('m_pes');
	}

	function index(){
		$data['title'] = 'Home';
		$this->load->view('home/header', $data);
		$this->load->view('content');
		$this->load->view('temp/foot');
	}

	function daftar(){
		$data['title'] = 'Form daftar';
		$this->load->view('home/header', $data);
		$this->load->view('f_pes');
		$this->load->view('temp/foot');
	}

	function x(){
		$id_pes = $this->input->post('id_pes');
		$nama_pes = $this->input->post('nama_pes');
		$jk = $this->input->post('jk');
		$no_wa = $this->input->post('no_wa');
		$email = $this->input->post('email');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$data = array(
			'id_pes' => $id_pes,
			'nama_pes' => $nama_pes,
			'jk' => $jk,
			'no_wa' => $no_wa,
			'email' => $email,
			'user' => $user,
			'pass' => md5($pass)
		);

		$this->m_pes->tambah($data);
		redirect('peserta');
	}

	function cek_login(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$where = array(
			'user' => $user,
			'pass' => md5($pass)
		);

		$cek = $this->m_log->cek_akun("admin", $where)->num_rows();

		if ($cek > 0) {
			$data_session = array(
				'nama' => $user,
				'status' => 'Login'
			);

			$this->session->set_userdata($data);
			redirect('adm');
		}else{
			redirect('home/');
		}
	}

	function logout(){
		$this->session->session_destroy();
		redirect(base_url('home/'));
	}

}