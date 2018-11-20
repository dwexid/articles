<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('m_user');
	}
	public function index(){
		$this->load->view("index");
	}

	public function dashboard(){
		if($this->session->userdata('username')){
			$this->load->view('home');
		}else{
			redirect('home/login');
		}
	}

	public function register(){
		if($this->session->userdata('username')){
			redirect();
		}

		$this->form_validation->set_rules('firstName', 'Fist Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'role', 'required');


		if($this->form_validation->run() != false){
			$nama 		= $this->input->post("firstName")." ".$this->input->post("lastName");
			$username 	= $this->input->post("username");
			$password	= $this->input->post("password");
			$role		= $this->input->post("role");

			$data = array(
						'nama_lengkap'	=> $nama,
						'username'		=> $username,
						'password'		=> md5($password),
						'role'			=> $role);

			$regis = $this->m_user->add($data);
			redirect('home/login');
		}else{
			$this->load->view('register');
		}
	}

	public function login(){
		if($this->session->userdata('username')){
			redirect();
		}
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() != false){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$where = array(
				'username'	=> $username,
				'password'	=> md5($password)
			);

			$validate = $this->m_user->validate($where);

			if($validate != null){
				$data_session = array(
					'username'	=> $username,
					'role'		=> $validate->role
				);
				$this->session->set_userdata($data_session);

				redirect('home/dashboard');
			}else{
				$this->session->set_userdata('error', 'Username / Password salah');
				redirect('home/login');
			}

		}else{
			$this->load->view('login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect();
	}

}