<?php
defined('BASEPATH') or exit('No direct script access allowed');

//=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//

class Editprofile extends CI_Controller
{
   public function index()
   {
      if( ! isset($this->session->member_login) )
      {
         header('Location: '. base_url());
         exit;
      }
      $nik = $this->session->member_login;
      $get = $this->DB_MODEL->getOne('member', 'nik', $nik);

      $data = [
         'title' => 'Ubah profile',
         'me' => $get
      ];
      $data['color'] = $this->DB_MODEL->getOne('application', 'name', 'color');
      $this->load->view('profile/edit', $data);
   }
   
   public function update()
   {
      $data = [
         'nik' => $this->input->post('nik'),
         'nama_member' => $this->input->post('nama_member'),
         'alamat_member' => $this->input->post('alamat_member')
      ];
      
      if( $this->DB_MODEL->update('member', $data) > 0 )
      {
         $pesan = '<script>alert("Ubah profile berhasil!");</script>';
         $this->session->set_flashdata('action_flash',$pesan);
         header('Location: '. base_url());
         exit;
      }
   }
}

//=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//