<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_article extends CI_Model{
	public function get(){
		$res = $this->db->get('artikel');
		return $res->result();
	}

	public function getById($id){
		$res = $this->db->where('id_artikel', $id)
						->get('artikel');

		return $res->row();
	}

	public function add($data){
		$this->db->insert('artikel', $data);
	}

	public function publish($id){
		//
	}

	public function update($id, $data){
		//
	}

	public function delete($id){
		$this->db->where('id', $id)
				 ->delete('artikel');	
	}
}
