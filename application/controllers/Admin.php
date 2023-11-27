<?php
defined('BASEPATH') or exit('No direct script access allowed');

//=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//

class Admin extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      if (!isset($this->session->admin_login)) {
         redirect('home');
         exit;
      }
      // echo $this->session->flashdata('admin_flash');
      // echo $this->session->flashdata('action_flash');
   }

   public function index()
   {
      $data = [
         'title' => 'Admin',
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/home', $data);
      $this->load->view('admin/switch-btn/left', $data);
      $this->load->view('admin/templates/footer', $data);
   }

   public function pesanan()
   {
      $data = [
         'title' => 'Pesanan',
         'pesanan' => $this->DB_MODEL->getPesanan('pesanan'),
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pesanan/pesanan', $data);
      $this->load->view('admin/switch-btn/left', $data);
      $this->load->view('admin/templates/footer', $data);
   }

   public function paket()
   {
      $data = [
         'title' => 'Paket',
         'paket' => $this->DB_MODEL->getAll('paket'),
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/paket/paket', $data);
      $this->load->view('admin/switch-btn/left', $data);
      $this->load->view('admin/templates/footer', $data);
   }

   public function driver()
   {
      $data = [
         'title' => 'Driver',
         'driver' => $this->DB_MODEL->getAll('driver'),
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/driver/driver', $data);
      $this->load->view('admin/switch-btn/left', $data);
      $this->load->view('admin/templates/footer', $data);
   }

   public function transaksi()
   {
      $data = [
         'title' => 'Transaksi',
         'transaksi' => $this->DB_MODEL->getTransaksi('transaksi'),
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/transaksi/transaksi', $data);
      $this->load->view('admin/switch-btn/left', $data);
      $this->load->view('admin/templates/footer', $data);
   }

   public function mobil()
   {
      $data = [
         'title' => 'Mobil',
         'mobil' => $this->DB_MODEL->getAll('mobil'),
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/mobil/mobil', $data);
      $this->load->view('admin/switch-btn/left', $data);
      $this->load->view('admin/templates/footer', $data);
   }

   public function member()
   {
      $data = [
         'title' => 'Member',
         'member' => $this->DB_MODEL->getAll('member'),
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/member/member', $data);
      $this->load->view('admin/switch-btn/left', $data);
      $this->load->view('admin/templates/footer', $data);
   }

   public function deleteMember($nik, $nama)
   {
      $getPsn = $this->DB_MODEL->getOne('pesanan', 'nik', $nik);

      if ($getPsn) {
         $id_pesanan = $getPsn->id_pesanan;

         $getTrs = $this->DB_MODEL->getOne('transaksi', 'id_pesanan', $id_pesanan);
         if ($getTrs)
            $this->DB_MODEL->delete('transaksi', 'id_pesanan', $id_pesanan);

         $this->DB_MODEL->delete('pesanan', 'id_pesanan', $id_pesanan);
      }

      $jaminan = $this->DB_MODEL->getOne('member', 'nik', $nik)->jaminan;

      $path = 'C:\\xampp\\htdocs\\rental-mobil\\rombax\\jaminan\\';
      unlink($path . $jaminan);    // Removing picture on Jaminan folder.

      $this->DB_MODEL->delete('member', 'nik', $nik);    // Delete member

      $pesan = '
         <script>alert("Member atas nama ' . $nama . ' berhasil dihapus!");</script>
      ';
      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/member');
      exit;
   }

   public function delete($id, $user)
   {
      if ($this->DB_MODEL->getOne('transaksi', 'id_pesanan', $id) > 0) {
         $this->DB_MODEL->delete('transaksi', 'id_pesanan', $id);
      }

      $get = $this->DB_MODEL->getOne('pesanan', 'id_pesanan', $id);
      $path = 'C:\\xampp\\htdocs\\rental-mobil\\rombax\\bukti_pembayaran\\';
      unlink($path . $get->bukti_pembayaran);    // Removing picture on Bukti pebayaran folder.

      $getPsn = $this->DB_MODEL->getOne('pesanan', 'id_pesanan', $id);
      $getMbl = [
         'id_mobil' => $getPsn->id_mobil,
         'status_mobil' => '<span style="color:green;">Tersedia</span>'
      ];
      $unavailable = '<span style="color:red;">Tidak tersedia</span>';
      $statusMbl = $this->DB_MODEL->getOne('mobil', 'id_mobil', $getMbl['id_mobil'])->status_mobil;
      if ($statusMbl === $unavailable) $this->DB_MODEL->update('mobil', $getMbl);

      if ($this->DB_MODEL->delete('pesanan', 'id_pesanan', $id) > 0) {

         $pesan = '
            <script>alert("Pesanan milik ' . $user . ' berhasil dihapus!");</script>
         ';
         $this->session->set_flashdata('action_flash', $pesan);
         redirect('admin/pesanan');
         exit;
      }
   }

   public function confirm($id, $user)
   {
      if ($this->DB_MODEL->getOne('transaksi', 'id_pesanan', $id) > 0) {
         $pesan = '
            <script>alert("Pesanan milik ' . $user . ' sudah dikonfirmasi!");</script>
         ';
         $this->session->set_flashdata('action_flash', $pesan);
         redirect('admin/pesanan');
         exit;
      }

      $data = [
         'id_pesanan' => $id,
         'tanggal_transaksi' => date('d M Y')
      ];

      if ($this->DB_MODEL->insert('transaksi', $data) > 0) {
         $getPsn = $this->DB_MODEL->getOne('pesanan', 'id_pesanan', $id);
         $getMbl = [
            'id_mobil' => $getPsn->id_mobil,
            'status_mobil' => '<span style="color:red;">Tidak tersedia</span>'
         ];
         $this->DB_MODEL->update('mobil', $getMbl);

         $pesan = '
            <script>alert("Pesanan milik ' . $user . ' berhasil di konfirmasi!");</script>
         ';
         $this->session->set_flashdata('action_flash', $pesan);
         redirect('admin/pesanan');
         exit;
      }
   }

   public function deleteTrs($id)
   {
      $this->DB_MODEL->delete('transaksi', 'id_transaksi', $id);
      $pesan = '
         <script>alert("Transaksi berhasil di hapus!");</script>
      ';
      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/transaksi');
      exit;
   }

   public function cetak()
   {
      $data = [
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')->value,
         'transaksi' => $this->DB_MODEL->getTransaksi('transaksi')
      ];
      $pesan = '
         <!doctype html>
         <html>
            <head>
               <style>
                  nav, .t-head, .trs-tindakan,
                  .cetak-btn, footer {
                     display:none;
                     opacity: 0;
                     visibility:hidden;
                  }
                  h3 {
                     text-align:center;
                     letter-spacing: 1.5px;
                     color: ' . $data['color'] . ';
                     height: 40px;
                     line-height: 40px;
                     width: 30%;
                     text-align: center;
                     margin: auto;
                     margin-bottom: 10px;
                     border-bottom: 2px solid ' . $data['color'] . ';
                  }
                  body, .transaksi {
                     padding-top: unset !important;
                     height: unset !important;
                  }
                  .admin {
                     height: unset !important;
                     padding-top: unset !important;
                     padding-bottom: unset !important;
                     padding: unset !important;
                  }
               </style>
            </head>
            <body onafterprint="cetak()">
            <h3> Bukti Transaksi </h3>
            <script>
                  window.print();
                  function cetak()
                  {
                     window.location = $("#base_url").val() + "admin/transaksi";
                  }
            </script>
            </body>
         </html>
      ';

      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/transaksi');
      exit;
   }

   public function editMember($nik)
   {
      $get = $this->DB_MODEL->getOne('member', 'nik', $nik);

      $data = [
         'title' => 'Ubah data member',
         'get' => $get,
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];
      $this->load->view('admin/edit/member', $data);
   }

   public function updateMember()
   {
      $data = [
         'nik' => $this->input->post('nik'),
         'nama_member' => $this->input->post('nama_member'),
         'alamat_member' => $this->input->post('alamat_member')
      ];

      $this->DB_MODEL->update('member', $data);
      $pesan = '<script>alert("Berhasil ubah data ' . $data['nama_member'] . '");</script>';

      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/member');
      exit;
   }

   public function editMobil($id_mobil)
   {
      $get = $this->DB_MODEL->getOne('mobil', 'id_mobil', $id_mobil);

      $data = [
         'title' => 'Ubah data mobil',
         'get' => $get,
         'status_mobil' => $get->status_mobil,
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];

      $available = '<span style="color:green;">Tersedia</span>';
      $unavailable = '<span style="color:red;">Tidak tersedia</span>';

      if ($data['status_mobil'] ===  $available) {
         $data['status'] = 'Tidak tersedia';
         $data['status_mobil'] = 'Tersedia';
      }

      if ($data['status_mobil'] ===  $unavailable) {
         $data['status'] = 'Tersedia';
         $data['status_mobil'] = 'Tidak tersedia';
      }

      $this->load->view('admin/edit/mobil', $data);
   }

   public function updateMobil()
   {
      $data = [
         'id_mobil' => $this->input->post('id_mobil'),
         'nama_mobil' => $this->input->post('nama_mobil'),
         'harga_mobil' => $this->input->post('harga_mobil'),
         'warna_mobil' => $this->input->post('warna_mobil'),
         'status_mobil' => $this->input->post('status_mobil'),
         'tahun' => $this->input->post('tahun'),
         'pajak' => $this->input->post('pajak'),
         'nopol' => $this->input->post('nopol'),
         'kapasitas' => $this->input->post('kapasitas')
      ];

      if ($data['status_mobil'] === 'Tersedia') {
         $data['status_mobil'] = '<span style="color:green;">' . $this->input->post('status_mobil') . '</span>';
      }

      if ($data['status_mobil'] === 'Tidak tersedia') {
         $data['status_mobil'] = '<span style="color:red;">' . $this->input->post('status_mobil') . '</span>';
      }

      $getMbl = $this->DB_MODEL->getOne('mobil', 'id_mobil', $data['id_mobil']);

      if (empty($_FILES['foto_mobil']['name'])) $data['foto_mobil'] = $getMbl->foto_mobil;
      else {
         $data['foto_mobil'] = $_FILES['foto_mobil']['name'];
         $tmp = $_FILES['foto_mobil']['tmp_name'];
         $path = 'C:\\xampp\\htdocs\\rental-mobil\\rombax\\img\\';
         unlink($path, $getMbl->foto_mobil);
         move_uploaded_file($tmp, $path . $data['foto_mobil']);
      }

      $this->DB_MODEL->update('mobil', $data);
      $pesan = '<script>alert("Berhasil ubah data ' . $data['nama_mobil'] . '");</script>';

      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/mobil');
      exit;
   }

   public function tambahMobil()
   {
      echo $this->session->flashdata('add-flash');
      $data = [
         'title' => 'Mobil baru',
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];
      $this->load->view('admin/tambah/mobil', $data);
   }

   public function addMobil()
   {
      $data = [
         'nama_mobil' => $this->input->post('nama_mobil'),
         'harga_mobil' => $this->input->post('harga_mobil'),
         'warna_mobil' => $this->input->post('warna_mobil'),
         'status_mobil' => $this->input->post('status_mobil'),
         'tahun' => $this->input->post('tahun'),
         'pajak' => $this->input->post('pajak'),
         'kapasitas' => $this->input->post('kapasitas'),
         'nopol' => $this->input->post('nopol')
      ];

      if ($data['status_mobil'] === 'Tersedia') {
         $data['status_mobil'] = '<span style="color:green;">' . $this->input->post('status_mobil') . '</span>';
      }

      if ($data['status_mobil'] === 'Tidak tersedia') {
         $data['status_mobil'] = '<span style="color:red;">' . $this->input->post('status_mobil') . '</span>';
      }

      $pesan = '<script>alert("Data harus lengkap!");</script>';

      if (empty($data['nama_mobil'] &&
         $data['harga_mobil'] &&
         $data['warna_mobil'] &&
         $data['status_mobil'] &&
         $data['tahun'] &&
         $data['pajak'] &&
         $data['kapasitas'] &&
         $data['nopol'])) {
         $this->session->set_flashdata('add-flash', $pesan);
         redirect('admin/tambahMobil');
         exit;
      }

      if (empty($_FILES['foto_mobil']['name'])) {
         $this->session->set_flashdata('add-flash', $pesan);
         redirect('admin/tambahMobil');
         exit;
      }

      $file = $_FILES['foto_mobil'];
      $data['foto_mobil'] = $file['name'];
      $tmp = $file['tmp_name'];
      $path = 'C:\\xampp\\htdocs\\rental-mobil\\rombax\\img\\';

      $this->DB_MODEL->insert('mobil', $data);

      move_uploaded_file($tmp, $path . $data['foto_mobil']);

      $pesan = '<script>alert("Berhasil tambah mobil baru!");</script>';

      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/mobil');
      exit;
   }

   public function hapusMobil($id_mobil)
   {
      $getMbl = $this->DB_MODEL->getOne('mobil', 'id_mobil', $id_mobil);
      // $getPsn = $this->DB_MODEL->getOne('pesanan', 'id_mobil', $id_mobil);
      // $getTrs = $this->DB_MODEL->getOne('pesanan', 'id_mobil', $id_mobil);

      // if ($getPsn)
      //    if ($getTrs)
      //       $this->DB_MODEL->delete('transaksi', 'id_pesanan', $getPsn->id_pesanan);

      //    else;
      // $this->DB_MODEL->delete('pesanan', 'id_pesanan', $getPsn->id_pesanan);

      $pesan = '
               <script>alert("Mobil ini ada yang pesan boss, jadi tidak bisa di hapus!");</script>
            ';
      if ($this->DB_MODEL->getOne('mobil', 'id_mobil', $id_mobil) >= 0) {
         $this->session->set_flashdata('action_flash', $pesan);
         redirect('admin/mobil');
         exit;
      }


      $path = 'C:\\xampp\\htdocs\\rental-mobil\\rombax\\img\\';
      unlink($path . $getMbl->foto_mobil);

      $this->DB_MODEL->delete('mobil', 'id_mobil', $id_mobil);

      $pesan = '<script>alert("Berhasil hapus mobil ' . $getMbl->nama_mobil . '!");</script>';

      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/mobil');
      exit;
   }

   public function tambahPaket()
   {
      echo $this->session->flashdata('add-flash');
      $data = [
         'title' => 'Paket baru',
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];
      $this->load->view('admin/tambah/paket', $data);
   }

   public function addPaket()
   {
      $data = [
         'nama_paket' => $this->input->post('nama_paket'),
         'durasi' => $this->input->post('durasi'),
         'biaya' => $this->input->post('biaya')
      ];

      $pesan = '<script>alert("Data harus lengkap!");</script>';

      if (empty($data['nama_paket'] &&
         $data['durasi'] &&
         $data['biaya'])) {
         $this->session->set_flashdata('add-flash', $pesan);
         redirect('admin/tambahPaket');
         exit;
      }

      $this->DB_MODEL->insert('paket', $data);

      $pesan = '<script>alert("Berhasil tambah paket baru!");</script>';

      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/paket');
      exit;
   }

   public function editPaket($id_paket)
   {
      $get = $this->DB_MODEL->getOne('paket', 'id_paket', $id_paket);

      $data = [
         'title' => 'Ubah data paket',
         'get' => $get,
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];

      $this->load->view('admin/edit/paket', $data);
   }

   public function updatePaket()
   {
      $data = [
         'id_paket' => $this->input->post('id_paket'),
         'nama_paket' => $this->input->post('nama_paket'),
         'durasi' => $this->input->post('durasi'),
         'biaya' => $this->input->post('biaya')
      ];

      $this->DB_MODEL->update('paket', $data);
      $pesan = '<script>alert("Berhasil ubah data ' . $data['nama_paket'] . '");</script>';

      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/paket');
      exit;
   }

   public function deletepaket($id)
   {
      $pesan = '
         <script>alert("Paket ini ada yang pesan boss, jadi tidak bisa di hapus!");</script>
      ';
      if ($this->DB_MODEL->getOne('paket', 'id_paket', $id) >= 0) {
         $this->session->set_flashdata('action_flash', $pesan);
         redirect('admin/paket');
         exit;
      }
      $this->DB_MODEL->delete('paket', 'id_paket', $id);
      $pesan = '
         <script>alert("Paket berhasil di hapus!");</script>
      ';
      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/paket');
      exit;
   }

   public function tambahDriver()
   {
      echo $this->session->flashdata('add-flash');
      $data = [
         'title' => 'Driver baru',
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];
      $this->load->view('admin/tambah/driver', $data);
   }

   public function addDriver()
   {
      $data = [
         'nama_driver' => $this->input->post('nama_driver'),
         'alamat_driver' => $this->input->post('alamat_driver'),
         'tlp_driver' => $this->input->post('tlp_driver'),
         'status_driver' => $this->input->post('status_driver')
      ];

      $pesan = '<script>alert("Data harus lengkap!");</script>';

      if (empty($data['nama_driver'] &&
         $data['alamat_driver'] &&
         $data['tlp_driver'] &&
         $data['status_driver'])) {
         $this->session->set_flashdata('add-flash', $pesan);
         redirect('admin/tambahdriver');
         exit;
      }

      $this->DB_MODEL->insert('driver', $data);

      $pesan = '<script>alert("Berhasil tambah driver baru!");</script>';

      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/driver');
      exit;
   }

   public function editDriver($id_driver)
   {
      $get = $this->DB_MODEL->getOne('driver', 'id_driver', $id_driver);

      $data = [
         'title' => 'Ubah data driver',
         'get' => $get,
         'color' => $this->DB_MODEL->getOne('application', 'name', 'color')
      ];

      $this->load->view('admin/edit/driver', $data);
   }

   public function updateDriver()
   {
      $data = [
         'id_driver' => $this->input->post('id_driver'),
         'nama_driver' => $this->input->post('nama_driver'),
         'alamat_driver' => $this->input->post('alamat_driver'),
         'tlp_driver' => $this->input->post('tlp_driver'),
         'status_driver' => $this->input->post('status_driver')
      ];

      $this->DB_MODEL->update('driver', $data);
      $pesan = '<script>alert("Berhasil ubah data ' . $data['nama_driver'] . '");</script>';

      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/driver');
      exit;
   }

   public function deletedriver($id)
   {
      $pesan = '
         <script>alert("Driver ini ada yang pesan boss, jadi tidak bisa di hapus!");</script>
      ';
      if ($this->DB_MODEL->getOne('pesanan', 'id_driver', $id) >= 0) {
         $this->session->set_flashdata('action_flash', $pesan);
         redirect('admin/driver');
         exit;
      }
      $pesan = '
         <script>alert("Driver berhasil di hapus!");</script>
      ';
      $this->DB_MODEL->delete('driver', 'id_driver', $id);
      $this->session->set_flashdata('action_flash', $pesan);
      redirect('admin/driver');
      exit;
   }

   public function theme()
   {
      $data = $_POST['color'];
      $this->DB_MODEL->update('application', $data);
   }
}

//=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//
