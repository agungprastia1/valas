<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		$this->load->library('session');
		$this->load->model('Tampil');
		$this->load->model('Tambah');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	// curs
	public function index()
	{
		$data = [
			'data' => $this->Tampil->getdata('valas')
		];
		$this->page('admin/curs', $data);
	}
	public function addcurs()
	{
		$this->page('admin/addcurs');
	}
	public function editcurs($where)
	{
		$data = [
			'data' => $this->Tampil->where('valas', $where)
		];
		$this->page('admin/editcurs', $data);
	}



	// video
	public function video()
	{
		$data = [
			'data' => $this->Tampil->getdata('vidio')
		];
		$this->page('admin/video', $data);
	}
	public function addvideo()
	{
		$this->page('admin/addvideo');
	}
	public function editvid($where)
	{
		$data = [
			'data' => $this->Tampil->where('vidio', $where)
		];
		$this->page('admin/editvideo', $data);
	}

	// profil
	public function profil()
	{
		$data = [
			'data' => $this->Tampil->getdata('akun'),
			'profil' => $this->Tampil->getdata('profil')
		];
		$this->page('admin/profil', $data);
	}
	public function addprofil()
	{
		$this->page('admin/addprofil');
	}
	public function editprofil($id)
	{
		$data = [
			'data' => $this->Tampil->where('profil', $id)
		];
		$this->page('admin/editprofil', $data);
	}
	public function addakun()
	{
		$this->page('admin/addakun');
	}
	public function editakun($id)
	{
		$data = [
			'data' => $this->Tampil->where('akun', $id)
		];
		$this->page('admin/editakun', $data);
	}


	public function page($content = true, $data = true)
	{
		$email = $this->session->userdata('email');
		$akun = [
			'user' => $this->Tampil->akun('akun', $email)
		];
		$this->load->view('admin/header', $akun);
		$this->load->view('admin/sidebar');
		$this->load->view($content, $data);
		$this->load->view('admin/footer');
	}
}
