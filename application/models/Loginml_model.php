<?php
class Loginml_model extends CI_Model{
    //cek nip dan password dosen
    function auth_user($username,$password){
        $query=$this->db->query("SELECT * FROM users WHERE user_email='$username' AND password =MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_mahasiswa($username,$password){
        $query=$this->db->query("SELECT * FROM tbl_user WHERE email='$username' AND password =MD5('$password') LIMIT 1");
        return $query;
    }
}