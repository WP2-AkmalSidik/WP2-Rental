<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function flasher($data)
    {
        $alert = '<script>alert("' . $data . '");</script>';
        $this->session->set_flashdata('member_flash', $alert);

        // Tambahkan kode untuk menghapus flash data setelah ditampilkan
        if (!$this->session->flashdata('member_flash_displayed')) {
            $this->session->set_flashdata('member_flash_displayed', true);
        } else {
            $this->session->unset_userdata('member_flash');
        }

        header('Location: ' . base_url());
        exit;
    }
    public function index()
    {
        $data = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ];

        if (empty($data['username']) || empty($data['password'])) {
            $this->flasher('Username dan Password wajib diisi!');
        }

        // Mulai pengecekan admin
        $cekAdmin = $this->DB_MODEL->cekUser('admin', $data['username']);
        if ($cekAdmin) {
            if ($data['password'] === $cekAdmin->password) {
                $alert = '<script>alert("Selamat datang ' . $cekAdmin->username . '!");</script>';
                $this->session->set_flashdata('admin_flash', $alert);
                $this->session->set_userdata('admin_login', $cekAdmin->username);
                header('Location: ' . base_url('admin'));
                exit;
            } else {
                $this->flasher('Password salah!');
            }
        }
        // Selesai pengecekan admin

        // Jika bukan admin, lanjutkan dengan pengecekan login member biasa
        $cek = $this->DB_MODEL->cekUser('member', $data['username']);
        if ($cek) {
            if ($data['password'] === $cek->password) {
                // Login member
                $this->session->set_userdata('member_login', $cek->nik);
                $alert = '<script>alert("Selamat datang ' . $cek->nama_member . '!");</script>';
                $this->session->set_flashdata('member_flash', $alert);
                header('Location: ' . base_url());
                exit;
            } else {
                $this->flasher('Password salah!');
            }
        } else {
            $this->flasher('Username ' . $data['username'] . ' tidak terdaftar!');
        }
    }

    public function destroy()
    {
        unset($_SESSION['member_login']);
        unset($_SESSION['admin_login']);
        header('Location: ' . base_url());
        exit;
    }
}
