<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

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
		$this->load->model('Tampil');
		$this->load->model('Tambah');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
		
		public function addcurs()
		{
		$config = array(
            array(
                'field' => 'nama',
                'label' => 'Mata Uang',
                'rules' => 'required'
            ),
            array(
                'field' => 'beli',
                'label' => 'Harga Beli',
                'rules' => 'required|numeric'
            ),
            array(
                'field' => 'jual',
                'label' => 'Harga Jual',
                'rules' => 'required|numeric'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $this->page('admin/addcurs');
        }else{
            $this->Tambah->addcurs();
        }
	}
	
	public function addvideo()
	{
		$config = array(
            array(
                'field' => 'judul',
                'label' => 'Judul Video',
                'rules' => 'required'
            )
            );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $this->page('admin/addvideo');
        }else{
            $this->Tambah->addvideo();
        }
	}

	public function addakun()
    {
        $config = array(
            array(
                'field' => 'user',
                'label' => 'Username',
                'rules' => 'required|max_length[30]'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                )
            ),
            array(
                'field' => 'repass',
                'label' => 'Re-Entry Password',
                'rules' => 'required|matches[pass]'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $this->page('admin/addakun', $config);
        } else {
            $this->Tambah->addakun();
        }
    }

	public function page($content=true,$data=true)
	{
		$email = $this->session->userdata('email');
        $akun = [
            'user' => $this->Tampil->where('akun', $email)
        ];
        $this->load->view('admin/header',$akun);
		$this->load->view('admin/sidebar');
		$this->load->view($content,$data);
		$this->load->view('admin/footer');
	}
}
