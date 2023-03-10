<?php
	class M_data extends CI_Model{
      function __construct(){
            parent::__construct();
            $this->load->database();
      }
      function show_barang(){
            $hasil=$this->db->query("SELECT * FROM data_siswa");
            return $hasil;

      }

      function rplc(){
            $hasil=$this->db->query("SELECT * FROM data_siswa WHERE jurusan='RPL C'");
            return $hasil;

      } 

      function pda(){
            $hasil=$this->db->query("SELECT * FROM data_siswa WHERE jurusan='PD A'");
            return $hasil;

      } 
      function mekab(){
            $hasil=$this->db->query("SELECT * FROM data_siswa WHERE jurusan='MEKA B'");
            return $hasil;

      } 

      function tkja(){
            $hasil=$this->db->query("SELECT * FROM data_siswa WHERE jurusan='TKJ A'");
            return $hasil;

      } 

      function loga(){
            $hasil=$this->db->query("SELECT * FROM data_siswa WHERE jurusan='LOG A'");
            return $hasil;

      } 

      function class1(){
            $hasil=$this->db->query("SELECT * FROM data_siswa WHERE grade='X'");
            return $hasil;

      } 
      function class2(){
            $hasil=$this->db->query("SELECT * FROM data_siswa WHERE grade='XI'");
            return $hasil;

      } 
      function class3(){
            $hasil=$this->db->query("SELECT * FROM data_siswa WHERE grade='XII'");
            return $hasil;

      } 
      function present(){
            $hasil=$this->db->query("SELECT * FROM clockin WHERE status='present' OR status='toolate' ");
            return $hasil;

      }  
      function absent(){
            $hasil=$this->db->query("SELECT * FROM clockin WHERE status='absent'");
            return $hasil;

      } 
      function permission(){
            $hasil=$this->db->query("SELECT * FROM clockin WHERE status='permission'");
            return $hasil;

      }   
 
      function show_users(){
            $hasil=$this->db->query("SELECT * FROM data_user");
            return $hasil;

      }    
      function show_recap(){
            $hasil=$this->db->query("SELECT * FROM clockin");
            return $hasil;

      }    
      
      function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

      function edit_data($where,$table){		
            return $this->db->get_where($table,$where);
      }

      function input_data($data,$table){
		$this->db->insert($table,$data);
	}

      function getDataUser($id_user){
            $this->db->where('id_user',$id_user);
            $query = $this->db->get('data_user');
            return $query->row();
      }

       function insertUser($data)
      {
          $this->db->insert('data_user',$data);
      }

      function updateDataUser($id_user,$data)
      {
          $this->db->where('id_user',$id_user);
          $this->db->update('data_user',$data);
      }

      function deleteUser($id_user)
      {
          $this->db->where('id_user',$id_user);
          $this->db->delete('data_user');
      }

      function deleteSiswa($id_siswa)
      {
          $this->db->where('id_siswa',$id_siswa);
          $this->db->delete('data_siswa');
      }
}

