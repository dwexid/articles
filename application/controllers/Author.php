<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Author extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('m_article');

		if(!$this->session->userdata('username')){
			redirect('home/login');
		}else{
			if($this->session->userdata('role')!='penulis'){
				redirect();
			}
		}
	}

	public function index(){
		$this->load->view('home');
	}

	public function addArticle(){
		if($this->input->post() == null){
			$this->load->view('add_article');
		}else{
			$config['upload_path']	 	= './files';
			$config['allowed_types'] 	= 'pdf|doc|docx';
			$config['max_size']			= 10000;
			$config['overwrite']		= true;
			$config['encrypt_name']		= true;
			$this->load->library('upload', $config);

			if($this->upload->do_upload('file_artikel') != false){

				$file_name = "files/".$this->upload->data('file_name');
				$data = array(
					'nama_penulis' 	=> $this->input->post('penulis'),
					'judul ' 		=> $this->input->post('judul'),
					'abstrak' 		=> $this->input->post('abstrak'),
					'keyword' 		=> $this->input->post('keyword'),
					'referensi' 	=> $this->input->post('referensi'),
					'file_path' 	=> $file_name,
					'rekomendasi' 	=> $this->input->post('rekomendasi'),
					'status'		=> '0'
					);

				$this->m_article->add($data);
				redirect(base_url());

			}else{
				$error = array('error'	=> $this->upload->display_errors());
				$this->load->view('add_article');
			}
		}
	}

	public function articles(){
		$data['articles'] = $this->m_article->get();
		$this->load->view('articles.php', $data);
	}

	public function editArticle($id){

	}

}
