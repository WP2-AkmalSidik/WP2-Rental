<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//

class Home extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();

      if( isset($this->session->admin_login) )
      {
         header('Location: '. base_url('admin'));
         exit;
      }
      echo $this->session->flashdata('reg_flash');
      echo $this->session->flashdata('member_flash');
      echo $this->session->flashdata('action_flash');
   }

   public function index()
   {
      if( isset($this->session->member_login) )
      {
         $user = $this->session->member_login;
         $data = [
            'mobil' => $this->DB_MODEL->getAll('mobil'),
            'driver' => $this->DB_MODEL->getAll('driver'),
            'me' => $this->DB_MODEL->getOne('member','nik', $user)
         ];
         
         $data['pesanan'] = $this->DB_MODEL->getOne('pesanan','nik', $data['me']->nik);
         if( $data['pesanan'] )
         {
            $data['pemberitahuan'] = $this->DB_MODEL->getOne('transaksi','id_pesanan',$data['pesanan']->id_pesanan);
         }
      }

      $data['color'] = $this->DB_MODEL->getOne('application', 'name', 'color');

      $data['mobil_limit'] = $this->DB_MODEL->getLimit('mobil',4);
      $data['judul'] = 'Homepage';

      $this->load->view('templates/header',$data);
      $this->load->view('templates/nav');
      $this->load->view('templates/left',$data);

      $this->load->view('profile/index',$data);    // Profile Modal
      $this->load->view('notification/index',$data);    // Notif Modal
      $this->load->view('upload/index',$data);    // Upload Modal
      $this->load->view('logout/index',$data);    // Logout Modal

      $this->load->view('login/index',$data);    // Loginpage

      $this->load->view('register/index',$data);    // Registerpage
      
      $this->load->view('home/index',$data);    // Homepage

      $this->load->view('templates/footer');
   }
}

//=======>***)->  Inuu alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//