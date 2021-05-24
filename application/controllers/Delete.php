<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Delete extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Delet');
	}
	// curs
	public function delcurs($where)
	{
		$this->Delet->delwhere('valas',$where);
        redirect(base_url('admin'));
	}

	// video
	public function delvid($where)
	{
		$this->Delet->delwhere('vidio',$where);
        redirect(base_url('admin/video'));
	}

	// Akun
	public function delakun($where)
	{
		$this->Delet->delwhere('akun',$where);
        redirect(base_url('admin/profil'));
	}
}
