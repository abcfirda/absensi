<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

      function __construct(){

            parent::__construct();

            $this->load->model('m_data');

      }

     

      public function index(){

            $x['data']=$this->m_data->show_barang();

            $this->load->view('table',$x);

      }

}