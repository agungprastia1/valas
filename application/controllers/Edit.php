<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Edit extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Update');
		$this->load->model('Tampil');
		$this->load->library('form_validation');

	}

	public function editcurs()
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
            $where = $this->input->post('id');
            $data = [
                'data' => $this->Tampil->where('valas', $where)
            ];
            $this->page('admin/editcurs',$data);
        }else{
            $this->Update->editcurs();
        }
    }

    public function editvideo()
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
            $where = $this->input->post('id');
            $data = [
                'data' => $this->Tampil->where('vidio', $where)
            ];
            $this->page('admin/editvideo',$data);
        }else{
            $this->Update->editvid();
        }
	}

	public function editakun()
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
            $this->page('admin/editakun', $config);
        } else {
            $this->Update->editakun();
        }
    }

    
    public function editprof()
    {
        $config = array(
            array(
                'field' => 'judul',
                'label' => 'Judul',
                'rules' => 'required'
            )
            );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $where = $this->input->post('id');
            $data = [
                'data' => $this->Tampil->where('profil', $where)
            ];
            $this->page('admin/editvideo',$data);
        }else{
            $this->Update->editprof();
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