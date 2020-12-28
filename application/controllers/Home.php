<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->load->helper('date');
		$this->load->model('m_riset', '', TRUE);
	}

	public function index()
	{
		$data = array(
			'title' => 'home',
			'datapeta' => $this->m_riset->get_datapeta('mytable'),
		);
		$this->load->view('template/head', $data);
		$this->load->view('template/header', $data);
		$this->load->view('template/banner', $data);
		$this->load->view('index', $data);
		$this->load->view('template/footer', $data);
	}

	public function petasekolah()
	{
		$data = array(
			'title' => 'petasekolah',
			'email' => $this->email,
			'datapeta' => $this->m_riset->get_datapeta('mytable'),
		);
		$this->load->view('template/head', $data);
		$this->load->view('template/navpeta', $data);
		$this->load->view('peta/petasekolah', $data);
	}

	public function routermap(){
		$data = array
		(
			'title' => 'routermap',
			'email' => $this->email,
		);
		$this->load->view('template/head', $data);
		$this->load->view('template/navpeta', $data);
		$this->load->view('peta/routing', $data);
	}

	//index masuk map dan memilih jenisa map
	public function beberapamap()
	{
		$data = array(
			'title' => 'menu map',
		);
		$this->load->view('template/head', $data);
		$this->load->view('template/navpeta', $data);
		$this->load->view('peta/beberapamap', $data);
	}
	public function petadunia()
	{
		$data = array(
			'title' => 'peta dunia',
			'datapeta' => $this->m_riset->get_datapeta('datapeta'),
		);
		$this->load->view('template/head', $data);
		$this->load->view('template/navpeta', $data);
		$this->load->view('peta/petadunia', $data);
	}

	public function register()
	{
		$data = array(
			'title' => 'register',
		);
		$this->load->view('template/head', $data);
		$this->load->view('form/register', $data);
	}

	public function registerinput()
	{
		$data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'npsn' => $this->input->post('npsn'),
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			'alamat' => $this->input->post('alamat'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'jumlah_siswa' => $this->input->post('jumlah_siswa'),
			'jumlah_guru' => $this->input->post('jumlah_guru'),
			'kepala_sekolah' => $this->input->post('kepala_sekolah'),
			// 'telp_sekolah' => $this->input->post('telp_sekolah'),
			'akreditasi' => $this->input->post('akreditasi'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
		);
		if ($this->m_riset->inputkan($data) > 0) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert" style="color:black;">register success</div>');
			redirect('home/register');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="color:black;">register Gagal</div>');
			redirect('home/register');
		}
	}

	public function datasekolah()
	{
		$data = array(
			'title' => 'datasekolah',
			'datapeta' => $this->m_riset->get_datapeta('mytable'),
		);
		$this->load->view('template/head', $data);
		$this->load->view('template/header', $data);
		$this->load->view('peta/datasekolah', $data);
		$this->load->view('template/footer', $data);
	}



	//admin
	public function admin()
	{
		$data = array(
			'title' => 'Admin',
		);
		$this->load->view('template/head', $data);
		$this->load->view('template/header', $data);
		$this->load->view('peta/datasekolah', $data);
		$this->load->view('template/footer', $data);
	}

	//hapusproduk
	public function hapusdata($id)
	{
		$where = array('id' => $id);
		if ($this->m_riset->hapus('datapeta', $where) > 0) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning">data terhapus</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="color:">Gagal Di hapus</div>');
		}
	}

	public function data()
	{
		$data = array(
			'title' => 'Data CRUD',
			'datapeta' => $this->m_riset->get_datapeta('datapeta'),
		);
		$this->load->view('template/head', $data);
		$this->load->view('template/header', $data);
		$this->load->view('admin/data', $data);
		$this->load->view('template/footer', $data);
	}

	//admin input
	public function admininput()
	{
		$data = array(
			'title' => 'input data map',
		);
		$this->load->view('template/head', $data);
		$this->load->view('template/navadmin', $data);
		$this->load->view('admin/admin', $data);
		$this->load->view('template/footer', $data);
	}

	//input data peta
	public function inputdatapeta()
	{
		$this->load->library('upload');
		$nmfile = 'home' . time();
		$config['upload_path'] = './template';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';


		$config['file_name'] = $nmfile;
		$this->upload->initialize($config);
		if ($_FILES['photo']['name']) {
			if ($this->upload->do_upload('photo')) {
				$gambar = $this->upload->data();

				$data = array(
					'lat' => $this->input->post('lat'),
					'lng' => $this->input->post('lng'),
					'nama_sekolah' => $this->input->post('nama_sekolah'),
					'alamat' => $this->input->post('alamat'),
					'photo' => $gambar['file_name'],
					'luas_bangunan' => $this->input->post('luas_bangunan'),
					'jml_siswa' => $this->input->post('jml_siswa'),
					'detail' => $this->input->post('detail')
				);
				if ($this->m_riset->inputdatamap($data) > 0) {
					$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert" style="color:green; text-align:center"> data tersimpan </div>');
					redirect('home/admininput');
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="color:red; text-align:center"> data gagal disimpan </div>');
					redirect('home/admininput');
				}
			}
		}
	}

	//search map
	public function searchmap()
	{
		$data = array(
			'title' => 'Search Map',
			'datapeta' => $this->m_riset->get_datapeta('datapeta'),
		);
		$this->load->view('template/head', $data);
		$this->load->view('template/header', $data);
		$this->load->view('peta/searchmap', $data);
		$this->load->view('template/footer', $data);
	}

	//logintemplate
	public function logintemplate()
	{
		$data = array(
			'title' => 'logintemplate'
		);

		$this->load->view('form/login', $data);
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password
		);
		$chek = $this->m_riset->cek_login("user", $where)->num_rows();
		if ($chek > 0) {

			$data_session = array(
				'nama' => $email,
				'status' => "login"
			);

			$this->session->set_userdata('pesan', '<div class="alert alert-success" role="alert" style="color:black;">Selamat Datang</div>');
			redirect('home/beberapamap');
		} else {
			redirect("home/logintemplate");
		}
	}

	//logout
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center;" role="alert"> Logout Berhasil </div>');
		redirect('home');
	}

	//detail SMK peta
	// public function detailSmk(id)
	// {
	// 	$data = array
	// 	(
	// 		'title' => "DETAIL SMK",
	// 		'detailSmk '=> $this->m_riset->detailSmk($id)
	// 	);
	// 	$this->load->view('template/head', $data);
	// }

}
