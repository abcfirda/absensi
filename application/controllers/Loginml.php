<?php
class Loginml extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('loginml_model');
    }
 
    function index(){
        $this->load->view('login_page');
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_dosen=$this->login_model->auth_dosen($username,$password);
 
        if($cek_admin->num_rows() > 0){ //jika login sebagai dosen
                        $data=$cek_admin->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_username',$data['username']);
                    $this->session->set_userdata('ses_password',$data['password']);
                    redirect('page');
 
                 }else{ //akses dosen
                    $this->session->set_userdata('akses','2');
                                $this->session->set_userdata('ses_username',$data['username']);
                    $this->session->set_userdata('ses_password',$data['password']);
                    redirect('page');
                 }
 
        }else{ //jika login sebagai mahasiswa
                    $cek_siswa=$this->login_model->auth_mahasiswa($username,$password);
                    if($cek_siswa->num_rows() > 0){
                            $data=$cek_siswa->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','3');
                            $this->session->set_userdata('ses_email',$data['user_email']);
                            $this->session->set_userdata('ses_password',$data['user_password']);
                            redirect('page');
                    }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect($url);
                    }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('login');
        redirect($url);
    }
 
}