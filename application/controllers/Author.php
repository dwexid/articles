<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Author extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('m_article');
	}

	public function addArticle(){
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('add_article');
		$this->load->view('footer');
	}

	public function editArticle($id){

	}

}
