<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_user extends CI_Model{
	
	public function get(){
		$this->db->get('user');
	}

	public function add($data){
		$this->db->insert('user', $data);
	}
	
	public function validate($data){
		$res = $this->db->get_where('user', $data);
		return $res->row();
	}


}