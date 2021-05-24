<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Tambah extends CI_Model
{
	// curs
    public function addcurs()
    {
        $data["nama"] = $this->input->post('nama');
        $data["beli"] = $this->input->post('beli');
        $data["jual"] = $this->input->post('jual');
        $data["foto"] = $this->addfoto();
        $res = array(
            'nama' => $data["nama"],
            'beli' => $data["beli"],
            'jual' => $data["jual"],
            'gambar' => $data["foto"]
        );

        $this->db->insert("valas",$res);

        redirect(base_url('admin'));
    }

    //tambah foto
    public function addfoto()
    {
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $fotobaru = $foto;

        $path = "asset/img/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = $fotobaru;
            return $res;
        }
        return "logo.png";
    }

    public function addvideo()
    {
        $data["judul"] = $this->input->post('judul');
        $data["video"] = $this->video();
        $res = array(
            'nama' => $data["judul"],
            'vidio' => $data["video"]
        );

        $this->db->insert("vidio",$res);

        redirect(base_url('admin/video'));
    }

    public function video()
    {
        $video = $_FILES['video']['name'];
        $tmp = $_FILES['video']['tmp_name'];
        $videobaru = $video;

        $path = "asset/video/" . $videobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = $videobaru;
            return $res;
        }
    }

    // Akun
    public function addakun()
    {
        $data["user"] = $this->input->post('user');
        $data["email"] = $this->input->post('email');
        $data["pass"] = $this->input->post('pass');
        $data["gambar"] = $this->addfoto();
        $res = array(
            'username' => $data["user"],
            'email' => $data["email"],
            'pass' => $data["pass"],
            'gambar' => $data["gambar"]
        );

        $this->db->insert("akun",$res);

        redirect(base_url('admin/profil'));
    }
}