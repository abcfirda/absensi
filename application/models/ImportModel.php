<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportModel extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('data_siswa', $data);
		if($insert){
			return true;
		}
	}
	public function getData(){
		$this->db->select('*');
		return $this->db->get('data_siswa')->result_array();
	}

}