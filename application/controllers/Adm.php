<?php 
class Adm extends ci_controller{
	
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('status') != 'Online') {
			redirect(base_url('log'));
		}

		$this->load->model('m_pes');
		$this->load->model('m_pen');
		$this->load->model('m_admin');
	}

	function index(){
		$data['title'] = 'Dashboard';
		$this->load->view('temp/head',$data);
		$this->load->view('adm/menu');
		$this->load->view('temp/foot');
	}

	function peserta(){
		$data['title'] = 'Data Peserta';
		$this->load->view('temp/head', $data);
		$this->load->view('adm/menu');
		$data['peserta'] = $this->m_pes->tampil();
		$this->load->view('peserta/tm', $data);
		$this->load->view('temp/foot');
	}

	function edit_pes(){
		//$this->load->view('');
	}

	function penguji(){
		$data['title'] = 'Data Penguji';
		$this->load->view('temp/head', $data);
		$this->load->view('adm/menu');
		$data['penguji'] = $this->m_pen->tampil();
		$this->load->view('penguji/tm', $data);
		$this->load->view('temp/foot');
	}

	function t_pen(){

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$data = array(
			'id_pen' => $id,
			'nama_pen' => $nama,
			'jk' => $jk,
			'no_wa' => $no_hp,
			'email' => $email,
			'user' => $user,
			'pass' => md5($pass)
		);

		$this->m_pen->tambah($data);
		redirect('adm/penguji');
	}

	function f_penguji(){
		$data['title'] = 'Form Penguji';
		$this->load->view('temp/head', $data);
		$this->load->view('adm/menu');
		$this->load->view('penguji/f_tambah');
		$this->load->view('temp/foot');
	}

	function admin(){
		$data['title'] = 'Data Admin';
		$this->load->view('temp/head', $data);
		$this->load->view('adm/menu');
		$data['adm'] = $this->m_admin->tampil();
		$this->load->view('adm/tm', $data);
		$this->load->view('temp/foot');
	}

	function t_admin(){
		$id_adm = $this->input->post('id_admin');
		$nama = $this->input->post('nama');

		$data = array(
			'id_admin' => $id_adm,
			'nama_adm' => $nama
		);

		$this->m_admin->tambah($data);
		rediret('adm/admin');
	}
}