<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Article extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('m_article');
	}

	public function index(){
		$this->load->view('articles');
	}

	public function detail($id){
		$data['artikel'] = $this->m_article->getById($id);
		$this->load->view('detail_artikel', $data);
	}
}