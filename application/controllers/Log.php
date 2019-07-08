<?php
class Log extends ci_controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_log');
	}

	function index(){
		$data['title'] = 'Form Log in';
		$this->load->view('temp/head', $data);
		$this->load->view('temp/login');
		$this->load->view('temp/foot');
	}

	function a(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$lv = $this->input->post('lv');

		if($lv == '0'){
			$where = array(
				'user' => $user,
				'pass' => md5($pass)
			);

			$cek = $this->m_log->cek_login('admin', $where)->num_rows();

			if($cek > 0){
				$data_session = array(
					'nama' => $user,
					'status' => 'Online');
				
				$this->session->set_userdata($data_session);
				redirect(base_url('adm'));
			}else{
				echo "password dan username salah !";
			}
			
		}elseif ($lv == '1') {

			$where = array(
				'user' => $user,
				'pass' => md5($pass)
			);

			$cek = $this->m_log->cek_login('peserta', $where)->num_rows();

			if($cek > 0){
				$data_session = array(
					'nama' => $user,
					'status' => 'Online');
				
				$this->session->set_userdata($data_session);
				redirect(base_url('peserta'));
			}else{
				echo 'password dan Username salah !';
			}
		}elseif ($lv == '2') {
			$where = array(
				'user' => $user,
				'pass' => md5($pass)
			);

			$cek = $this->m_log->cek_login('penguji', $where)->num_rows();

			if($cek > 0){
				$data_session = array(
					'nama' => $user,
					'status' => 'Online');
			}

			$this->session->set_userdata($data_session);
			redirect(base_url('penilai'));
		}
	}

	function b(){
		$this->session->sess_destroy();
		redirect(base_url('log'));
	}
}