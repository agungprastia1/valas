<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
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
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Tampil');
        $this->load->model('Update');
    }

    public function index()
    {
        $this->load->view('login/login');
    }
    public function loginpun()
    {
        $config = array(
            array(
                'field' => 'email',
                'label' => 'E-Mail',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run($config) == false) {
            $this->index('login/login', $config);
        } else {
            $this->Tampil->login();
        }
    }

    public function email()
    {
        $this->load->view('login/email');
    }
    public function pass()
    {
        $this->load->view('login/pass');
    }
    public function editprofil()
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
                'data' => $this->Tampil->where('profil', $where)
            ];
            redirect(site_url('admin/editprofil', $data));
        } else {
            $this->Update->editprof();
        }
    }

    public function passact()
    {
        $config = array(
            array(
                'field' => 'email',
                'label' => 'E Mail',
                'rules' => 'required|callback_email_check'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {

            $this->load->view('login/email');
        } else {
            $email = $this->input->post('email');
            $cek =
                [
                    'data' => $this->Tampil->akun('akun', $email)
                ];
            $this->load->view('login/pass', $cek);
        }
    }

    public function email_check($str)
    {
        $email = $this->input->post('email');
        $cek = $this->Tampil->akun('akun', $email);
        $mail = '';
        foreach ($cek as $e) {
            $mail = $e['email'];
        }
        if ($str != $mail) {
            $this->form_validation->set_message('email_check', '{field} Email tidak terdaftar');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function rubah()
    {
        $config = array(
            array(
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required'
            ),
            array(
                'field' => 'repass',
                'label' => 'Konfirmasi Password',
                'rules' => 'required|matches[pass]'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $email = $this->input->post('email');
            $cek =
                [
                    'data' => $this->Tampil->akun('akun', $email)
                ];
            $this->load->view('login/pass', $cek);
        } else {
            $this->Update->pass();
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
