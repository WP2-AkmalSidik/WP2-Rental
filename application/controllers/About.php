<?php
defined('BASEPATH') or exit('No direct script access allowed');

//=======>***)->  inuu - RBX family - Brebes - Jawa Tengah  <-(***<=======//

class About extends CI_Controller
{
   public function index()
   {
      $data = [
         'judul' => 'About',
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];
      if( isset($this->session->member_login) )
      {
         $user = $this->session->member_login;
         $data['me'] = $this->DB_MODEL->getOne('member', 'nik', $user);
         $data['pesanan'] = $this->DB_MODEL->getOne('pesanan','nik', $data['me']->nik);
         if( $data['pesanan'] )
         {
            $data['pemberitahuan'] = $this->DB_MODEL->getOne('transaksi','id_pesanan',$data['pesanan']->id_pesanan);
         }
      }
      $this->load->view('templates/header',$data);
      $this->load->view('templates/nav');
      $this->load->view('templates/left',$data);
      
      $this->load->view('profile/index',$data);    // Profile Modal
      $this->load->view('notification/index',$data);    // Notif Modal
      $this->load->view('upload/index',$data);    // Upload Modal
      $this->load->view('logout/index',$data);    // Logout Modal

      $this->load->view('login/index',$data);    // Loginpage
      $this->load->view('register/index',$data);    // Registerpage
      
      $this->load->view('about/index',$data);
      $this->load->view('templates/footer',$data);
   }
}

//=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//