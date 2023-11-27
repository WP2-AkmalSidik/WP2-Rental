<?php
defined('BASEPATH') or exit('No direct script access allowed');

//=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//

class Action extends CI_Controller
{
   public function getDriver ()
   {
      $data['driver'] = $this->DB_MODEL->getAll('driver');
      foreach($data['driver'] as $drv)
      {
         echo '<option value="' . $drv->id_driver . '">Driver: '. $drv->nama_driver .'</option>';
      }
   }

   public function getPaket ()
   {
      $data['paket'] = $this->DB_MODEL->getAll('paket');
      foreach($data['paket'] as $pkt)
      {
         echo '<option value="' . $pkt->biaya . '">Paket: '. $pkt->nama_paket .'</option>';
      }
   }

   public function pesan()
   {
      $data = [
         'nik' => $this->input->post('user'),
         'id_paket' => $this->DB_MODEL->getOne('paket','biaya',$this->input->post('paket'))->id_paket,
         'id_driver' => $this->input->post('driver'),
         'id_mobil' => $this->input->post('mobil'),
         'tanggal_pemesanan' => date('d M Y')
      ];

      if ($this->DB_MODEL->getOne('pesanan', 'nik', $data['nik']) > 0)
      {
         $pesan = '<script>alert("Anda telah melakukan pemesanan.");</script>';
         $this->session->set_flashdata('action_flash', $pesan);
         redirect('home');
         exit;
      }

      $unavailable = '<span style="color:red;">Tidak tersedia</span>';
      if( 
         $this->DB_MODEL->
            getOne('mobil', 'id_mobil', $data['id_mobil'])->status_mobil === $unavailable 
      )
         {
            $data = '<script>alert("Mohon maaf, mobil ini tidak tersedia!");</script>';
            $this->session->set_flashdata('action_flash', $data);
            redirect('home');
            exit;
         }

      if ($this->DB_MODEL->insert('pesanan', $data) > 0) {
         $data = '<script>alert("Pesanan akan segera di proses!");</script>';
         $this->session->set_flashdata('action_flash', $data);
         redirect('home');
         exit;
      }
   }

   public function upload()
   {
      $nik = $this->input->post('nik');

      $data = [
         'bukti_pembayaran' => $_FILES['photo']['name'],
         'nik' => $nik
      ];

      if ( $this->DB_MODEL->update('pesanan', $data) > 0)
      {
         $tmp = $_FILES['photo']['tmp_name'];
         $name = $_FILES['photo']['name'];
         $path = 'C:\\xampp\\htdocs\\rental-mobil\\rombax\\bukti_pembayaran\\';
         move_uploaded_file($tmp, $path . $name);

         $data = '<script>alert("Bukti pembayaran berhasil di upload!");</script>';
         $this->session->set_flashdata('action_flash', $data);
         redirect('home');
         exit;
      }
   }
}

//=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//