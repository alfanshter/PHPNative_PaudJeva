<?php

class User extends Controller
{
    public function index()
    {
        if ($_SESSION['role'] == 1) {
            $data['title'] = 'Halaman Siswa';
            return $this->view('admin/admin');
        }
        Flasher::setMessage('Gagal', 'akses', 'danger');
        header('location: ' . base_url . '/home');


    }

    public function deletesiswa()
    {
        if ($this->model('SiswaModel')->hapussiswa($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/datasiswa');
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/datasiswa');
            exit;
        }
    }

    public function carisiswa()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['siswa'] = $this->model('SiswaModel')->cariSiswa();
        $this->view('siswa/tambahsiswa', $data);
    }
}