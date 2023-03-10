<?php
class Loginml extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
  }
 
  function index(){
    $this->load->view('home');
  }
 
  function data_tabel(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1'){
      $this->load->view('tabel');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }
 
  function tambahdata(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1'){
      $this->load->view('tambahdata');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
 
  function permission(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1'){
      $this->load->view('tablepermission');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function absent(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1'){
      $this->load->view('tabelabsent');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function present(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1'){
      $this->load->view('tabelpresent');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function data_admin(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='2'){
      $this->load->view('tabledata_admin');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function recap_admin(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='2'){
      $this->load->view('datarecap_admin');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}