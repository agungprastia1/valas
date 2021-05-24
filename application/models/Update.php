<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Update extends CI_Model
{
	public function editcurs()
    {
    	$id = $this->input->post('id');
    	$data["nama"] = $this->input->post('nama');
        $data["beli"] = $this->input->post('beli');
        $data["jual"] = $this->input->post('jual');
        $data["foto"] = $this->addfoto();
        $res = array(
            'id' => $id,
            'nama' => $data["nama"],
            'beli' => $data["beli"],
            'jual' => $data["jual"],
            'gambar' => $data["foto"]
        );
        $this->db->where('id', $id);
        $this->db->update("valas",$res);
        
        redirect(base_url('admin'));
    }

    //tambah foto
    public function addfoto()
    {
        $bg = $this->input->post('bg');
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $fotobaru = $foto;

        $path = "asset/img/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = $fotobaru;
            return $res;
        }

        return $bg;
    }

    public function editvid()
    {
    	$id = $this->input->post('id');
        $data["judul"] = $this->input->post('judul');
        $data["video"] = $this->video();
        $res = array(
            'id' => $id,
            'nama' => $data["judul"],
            'vidio' => $data["video"]
        );

        $this->db->where('id', $id);
        $this->db->update("vidio",$res);
        
        redirect(base_url('admin/video'));
    }

    public function video()
    {
        $video = $_FILES['vidio']['name'];
        $tmp = $_FILES['vidio']['tmp_name'];
        $videobaru = $video;

        $path = "asset/video/" . $videobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = $videobaru;
            return $res;
        }
    }

     // Akun
    public function editakun()
    {
    	$id = $this->input->post('id');
        $data["user"] = $this->input->post('user');
        $data["email"] = $this->input->post('email');
        $data["pass"] = $this->input->post('pass');
        $data["gambar"] = $this->addfoto();
        $res = array(
        	'id'	=> $id,
            'username' => $data["user"],
            'email' => $data["email"],
            'pass' => $data["pass"],
            'gambar' => $data["gambar"]
        );

        $this->db->where('id', $id);
        $this->db->update("akun",$res);
        
        redirect(base_url('admin/profil'));
    }

    public function editprof()
    {
    	$id = $this->input->post('id');
        $data["judul"] = $this->input->post('judul');
        $data["foto"] = $this->addfoto();
        $res = array(
            'id' => $id,
            'nama' => $data["judul"],
            'logo' => $data["foto"]
        );
        $this->db->where('id', $id);
        $this->db->update("profil",$res);
        
        redirect(base_url('admin/profil'));
    }

    public function pass()
    {
        $id = $this->input->post('pass');
        $email = $this->input->email('email');
        $res = array(
            'pass' => $id
        );
        $this->db->where('email', $email);
        $this->db->update("profil", $res);
        
        redirect(base_url('login'));
}
}