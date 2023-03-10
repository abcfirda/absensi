<?php
	class Delete extends CI_Model{
      function __construct(){
            parent::__construct();
            $this->load->database();
      }
      
      public function deleteuser($id_user)
      {
          $this->db->where('id_user', $id_user);
          $this->db->delete('data_user');
      }

      function hapus($id_user){
            $hasil=$this->db->query("DELETE FROM data_siswa WHERE id_user='$id_user'");
            return $hasil;
        }
    }

