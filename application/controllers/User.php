<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
		$this->load->library(array('session'));
	}

	public function index()
	{
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if ($this->session->userdata('sadmin')) {
			redirect('user/sadminHome');
		} elseif ($this->session->userdata('admin')) {
			redirect('user/adminHome');
		} else {
			$this->load->view('login_page');
		}
	}

	function tambah_aksi()
	{
		$nis = $this->input->post('nis');
		$password = $this->input->post('password');
		$imei = $this->input->post('imei');

		$data = array(
			'nis' => $nis,
			'password' => $password,
			'imei' => $imei
		);
		$this->m_data->input_data($data, 'sadmin');
		//redirect('crud/index');
	}


	public function import()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('ImportModel');

		//restrict users to go back to login if session has been set
		if ($this->session->userdata('user')) {
			$data = array(
				'list_data'	=> $this->ImportModel->getData()
			);
			$this->load->view('table.php', $data);
		} else {
			$this->load->view('login_page');
		}
	}

	// function hapus($id)
	// {
	// 	$where = array('id' => $id);
	// 	$this->m_data->hapus_data($where, 'data');
	// 	redirect('table');
	// }

	public function deleteuser($id_user)
	{
		$this->load->model('Delete');
		$id_user = $this->input->post('id_user');
		$this->deletedata->deleteuser($id_user);

		// redirect ke halaman sebelumnya atau ke halaman lain yang diinginkan
		alert('kontol');
		// redirect('superadmin/table_user');
		// $this->load->view('superadmin/table_user');
	}


	function edit($id)
	{
		$where = array('id_user' => $id_user);
		$data['data'] = $this->m_data->edit_data($where, 'data')->result();
		$this->load->view('edit_user', $data);
	}

	function hapus_data()
	{
		$id_user = $this->input->post('id_user');
		$this->m_barang->hapus_barang($id_user);
		redirect('barang');
	}

	public function import_excel()
	{
		if (isset($_FILES["fileExcel"]["name"])) {
			$path = $_FILES["fileExcel"]["tmp_name"];
			// $ALLOWED_EXT = ['xlsx', 'xlsm', 'xlsb', 'xltx', 'xls'];
			// if(!in_array(pathinfo($filename)['extension'], $ALLOWED_EXT)){
			// 	$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Data gagal di Import ke Database');
			// 	redirect('user/table');
			// }else
			$object = PHPExcel_IOFactory::load($path);
			foreach ($object->getWorksheetIterator() as $worksheet) {
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for ($row = 2; $row <= $highestRow; $row++) {
					$nama = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nis = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$pass = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$grade = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$jurusan = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$kelas = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$no_absen = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
					$jenis_kelamin = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
					$gambar = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
					$temp_data[] = array(
						'nama'	=> $nama,
						'nis'	=> $nis,
						'pass'	=> $pass,
						'grade'	=> $grade,
						'jurusan'	=> $jurusan,
						'kelas'	=> $kelas,
						'no_absen'	=> $no_absen,
						'jenis_kelamin'	=> $jenis_kelamin,
						'gambar'	=> $gambar
					);
				}
			}
			$this->load->model('ImportModel');
			$insert = $this->ImportModel->insert($temp_data);
			if ($insert) {
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
				redirect($_SERVER['HTTP_REFERER']);
			} else {
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
				redirect($_SERVER['HTTP_REFERER']);
			}
		} else {
			echo "Tidak ada file yang masuk";
		}
	}

	public function login()
	{
		//load session library
		$this->load->library('session');

		$username = $_POST['username'];
		$password = $_POST['password'];

		$data = $this->users_model->login($username, $password);

		if ($data['level'] == 1) {
			$this->session->set_userdata('sadmin', $data);
			redirect('user/sadminHome');
		} else if ($data['level'] == 2) {
			$this->session->set_userdata('admin', $data);
			redirect('user/adminHome');
		} else {
			header('location:' . base_url() . $this->index());
			$this->session->set_flashdata('error', 'Invalid login. User not found');
		}
	}

	public function sadminHome()
	{
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$this->load->view('superadmin/home');
		} else {
			redirect('/');
		}
	}

	public function adminHome()
	{
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('admin')) {
			$this->load->view('admin/home');
		} else {
			redirect('/');
		}
	}


	public function table()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');
		// print_r($this->load->model('m_data'));
		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->show_barang();

			$this->load->view('superadmin/table', $x);
		} else {
			redirect('/');
		}
	}
	public function table_user()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');
		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->show_users();
			$this->load->view('superadmin/table_user', $x);
		} else {
			redirect('/');
		}
	}

	public function tabledata_admin()
	{
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('admin')) {
			$this->load->view('admin/tabledata_admin');
		} else {
			redirect('/');
		}
	}
	public function datarecap_admin()
	{
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('admin')) {
			$this->load->view('admin/datarecap_admin');
		} else {
			redirect('/');
		}
	}
	public function tabelpresent()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->present();
			$this->load->view('superadmin/tabelpresent', $x);
		} else {
			redirect('/');
		}
	}

	public function rplc()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->rplc();
			$this->load->view('superadmin/table', $x);
		} else {
			redirect('/');
		}
	}

	public function pda()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->pda();
			$this->load->view('superadmin/table', $x);
		} else {
			redirect('/');
		}
	}

	public function tkja()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->tkja();
			$this->load->view('superadmin/table', $x);
		} else {
			redirect('/');
		}
	}

	public function mekab()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->mekab();
			$this->load->view('superadmin/table', $x);
		} else {
			redirect('/');
		}
	}

	public function loga()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->loga();
			$this->load->view('superadmin/table', $x);
		} else {
			redirect('/');
		}
	}

	public function grade1()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->class1();
			$this->load->view('superadmin/table', $x);
		} else {
			redirect('/');
		}
	}

	public function grade2()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->class2();
			$this->load->view('superadmin/table', $x);
		} else {
			redirect('/');
		}
	}
	public function grade3()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->class3();
			$this->load->view('superadmin/table', $x);
		} else {
			redirect('/');
		}
	}

	public function tabelabsent()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->absent();
			$this->load->view('superadmin/tabelabsent', $x);
		} else {
			redirect('/');
		}
	}
	public function tablepermission()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data', 'm');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$x['data'] = $this->m->permission();
			$this->load->view('superadmin/tablepermission', $x);
		} else {
			redirect('/');
		}
	}
	public function tambahdata()
	{
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$this->load->view('superadmin/add_user');
		} else {
			redirect('/');
		}
	}


	public function editprofile()
	{
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$this->load->view('superadmin/editprofile');
		} else {
			redirect('/');
		}
	}

	public function edituser($id_user)
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data');
		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$queryUser = $this->m_data->getDataUser($id_user);
			$DATA = array('userdata' => $queryUser);
			// echo "<pre>";
			// print_r($queryUser);
			// echo "<pre>";
			$this->load->view('superadmin/edit_user', $DATA);
		} else {
			redirect('/');
		}
	}

	public function functionEdit()
	{
		//load session library
		$this->load->library('session');
		$this->load->model('m_data');
		//restrict users to go to home if not logged in
		if ($this->session->userdata('sadmin')) {
			$id_user = $this->input->post('id_user');
			$nis = $this->input->post('nis');
			$pass = $this->input->post('pass');
			$imei = $this->input->post('imei');

			$ArrUpdate = array(
				'nis' => $nis,
				'pass' => $pass,
				'imei' => $imei
			);

			$this->m_data->updateDataUser($ArrUpdate);
			redirect('user/table_user');
			// echo "<pre>";
			// print_r($ArrUpdate);
			// echo "<pre>";
		} else {
			redirect('/');
		}
	}

	public function logout()
	{
		//load session library
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect('/');
	}

	public function tambah()
	{
		$this->load->library('session');
		$this->load->model('m_data');

		if ($this->session->userdata('sadmin')) {
			$nis = $this->input->post('nis');
			$pass = $this->input->post('pass');
			$imei = $this->input->post('imei');

			$ArrInsert = array(
				'nis' => $nis,
				'pass' => $pass,
				'imei' => $imei
			);

			$add = $this->m_data->insertUser($ArrInsert);
			// redirect('user/table_user');
			// echo "<pre>";
			// print_r($ArrInsert);
			// echo "<pre>";
			// echo $this->session->set_flashdata('status','Username or Password is Wrong');
			if ($add) {
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
				redirect('user/table_user');
			} else {
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
				redirect('user/table_user');
			}
		} else {
			redirect('/');
		}
	}

	public function delete($id_user)
	{
		$this->load->library('session');
		$this->load->model('m_data');

		if ($this->session->userdata('sadmin')) {
			$this->m_data->deleteUser($id_user);
			$this->session->set_flashdata('message', '<span class="glyphicon glyphicon-remove">Data berhasil terhapus</span>');
			redirect('user/table_user');
		} else {
			redirect('/');
		}
	}

	public function deleteSiswa($id_siswa)
	{
		$this->load->library('session');
		$this->load->model('m_data');

		if ($this->session->userdata('sadmin')) {
			$this->m_data->deleteSiswa($id_siswa);
			$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove">Data berhasil terhapus</span>');
			redirect('user/table');
		} else {
			redirect('/');
		}
	}

	public function export_excel()
	{

		$this->load->library('session');
		$this->load->model('m_data');
		$data['datauser'] = $this->m_data->show_users('data_user')->result();
		require_once(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
		require_once(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator("Hikmah Geming");
		$object->getProperties()->setLastModifiedBy("Hikmah Geming");
		$object->getProperties()->setTitle("Daftar User");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1', 'Id_User');
		$object->getActiveSheet()->setCellValue('B1', 'NIS');
		$object->getActiveSheet()->setCellValue('C1', 'PASS');
		$object->getActiveSheet()->setCellValue('D1', 'IMEI');

		$baris = 2;
		$no = 1;

		foreach ($data['datauser'] as $dtu) {
			// $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('A' . $baris, $dtu->id_user);
			$object->getActiveSheet()->setCellValue('B' . $baris, $dtu->nis);
			$object->getActiveSheet()->setCellValue('C' . $baris, $dtu->pass);
			$object->getActiveSheet()->setCellValue('D' . $baris, $dtu->imei);

			$baris++;
		}
		$filename = "data_user" . '.xlsx';

		$object->getActiveSheet()->setTitle("Daftar User");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename = "' . $filename . '"');
		header('Cache-Control: max-age=0');

		$writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
		$writer->save('php://output');

		exit;
	}

	// public function pdf(){
	// 	$this->load->library('dompdf_gen');

	// 	$data['datauser'] = $this->m_data->show_users('data_user')->result();

	// 	$this->load->view('laporan_pdf', $data);
	// 	$paper_size = 'A4';
	// 	$orientation = 'landscape';
	// 	$html = $this->output->get_output();
	// 	$this->dompdf->set_paper($paper_size, $orientation);

	// 	$this->dompdf->load_html($html);
	// 	$this->dompdf->render();
	// 	$this->dompdf->stream("data_user.pdf", array('Attachment' =>0));
	// }
}
