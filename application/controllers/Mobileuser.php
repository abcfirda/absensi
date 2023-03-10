<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Mobileuser extends REST_Controller  {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mobileuser_model');
	}

	public function proses()
	{
		$this->load->library('session');

		$username = $_POST['username'];
		$password = $_POST['password'];

		$data = $this->users_model->login($username, $password);
		if($data==null){
			$this->response('vailed to login', 400);
		}
		$this->response([
			"data" => $data['level']
		],200);
	}

	public function logout()
	{
		$this->session->unset_userdata('nis');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('is_login');
		redirect('login');
	}
}
?>