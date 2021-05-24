<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class Tampil extends CI_Model
{
    public function getdata($tabel)
    {
        $res = $this->db->get($tabel);
        $t = $res->result_array();
        return $t;
    }

    public function where($tabel, $where)
    {
        $res = $this->db->get_where($tabel, array('id' => $where));
        $t = $res->result_array();
        return $t;
    }

    public function akun($tabel, $where)
    {
        $res = $this->db->get_where($tabel, array('email' => $where));
        $t = $res->result_array();
        return $t;
    }

    public function cek_akun($email, $pass)
    {
        return $this->db->query("SELECT * FROM akun WHERE email = '" . $email . "' AND pass = '" . $pass . "'");
    }

    // login
    public function login()
    {
        $run = false;
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $akun = $this->cek_akun($email, $pass);
        if ($akun->num_rows() != 0) {
            foreach ($akun->result() as $a) {
                $em = $a->email;
            }
            foreach ($akun->result() as $p) {
                $pa = $p->pass;
            }
            foreach ($akun->result() as $na) {
                $name = $na->username;
            }

            if (($email == $em) && ($pass == $pa)) {
                $data_session = array(
                    'email' => $em,
                    'username' => $name,
                    'status' => "login"
                );

                $this->session->set_userdata($data_session);
                $run = true;
            }
        }

        if ($run == true) {
            redirect(base_url("admin"));
        } else {
            echo "<script type='text/javascript'>
            window.alert('Email atau password salah');
            window.location.href='" . base_url('login') . "';
            </script>
            ";
        }
    }

    public function playlist()
    {
        $this->db->select('*');
        $data = $this->db->get('vidio')->result_array();
        $i = 0;
        $video = [];
        foreach ($data as $value) {
            $video[$i] = [
                'id' => $value['id'],
                'nama' => $value['nama'],
                'vidio' => $value['vidio']
            ];
            $i++;
        }
        // echo json_encode($video);
    }
}
