<?php

class Aktifasi extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Aktifasi';
        $this->view('aktifasi/index', $data);
    }

    //mulai aktifasi siswa
    public function aktifasiSiswa()
    {
        if ($this->model('UsersModel')->setPassword($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diaktifkan', 'success');
            header('location: ' . base_url . '/home');
        } else {
            Flasher::setMessage('Gagal', 'diaktifkan', 'success');
            header('location: ' . base_url . '/home');
        }
    }
}
