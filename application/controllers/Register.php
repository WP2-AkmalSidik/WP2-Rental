<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function flasher($data)
    {
        $alert = '<script>alert("'. $data .'");</script>';
        $this->session->
            set_flashdata('reg_flash',$alert);
            
        header('Location: '. base_url());
        exit;
    }

    public function index()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama_member' => $this->input->post('nama'),
            'alamat_member' => $this->input->post('alamat'),
            'foto_member' => 'me.jpg',
            'tlp_member' => $this->input->post('tlp'),
            'ttl_member' => $this->input->post('ttl'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ];

        if (
            empty(
                $data['nik']||
                $data['nama']||
                $data['ttl']||
                $data['alamat']||
                $data['username']||
                $data['password']||
                $data['tlp']
            )
        )
        {
            $this->flasher('Data wajib di isi!');
        }

        if(empty($data['nik'])) 
        {
            $this->flasher('NIK harus di isi!');
                        }
        if(empty($data['nama_member'])) 
        {
            $this->flasher('Nama lengkap harus di isi!');
                        }
        if(empty($data['ttl_member'])) 
        {
            $this->flasher('Tempat lahir harus di isi!');
                        }
        if(empty($data['alamat_member'])) 
        {
            $this->flasher('Alamat harus di isi!');
                        }
        if(empty($data['username'])) 
        {
            $this->flasher('Username harus di isi!');
                        }
        if(empty($data['password'])) 
        {
            $this->flasher('Password harus di isi!');
                        }

        if( empty( $_FILES['jaminan']['name'] ) )
        {
            $this->flasher('Silahkan upload foto KTP/ SIM !');
                        }

        $data['jaminan'] = $_FILES['jaminan']['name'];

        // User nik exists checking...
        $get = $this->DB_MODEL->getOne('member', 'nik', $data['nik']);

        if( $get )
        {
            $this->
                flasher('Nik "'. $data['nik'] .'" telah digunakan oleh '. $get->nama_member .'!');
        }

        if( $data['username'] === $get->username )
        {
            $this->
                flasher('Username "'. $data['username'] .'" telah digunakan oleh '. $get->nama_member .'!');
        }

        // Finish checking...
        if ( $this->DB_MODEL->insert('member',$data) > 0)
        {
            $path = 'C:\\xampp\\htdocs\\rental-mobil\\rombax\\jaminan\\';
            $tmp = $_FILES['jaminan']['tmp_name'];
            move_uploaded_file($tmp, $path . $data['jaminan']);
            
            $this->flasher('Akun '. $data['nama_member'] .' berhasil terdaftar!');
        }
    }
}

//=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//