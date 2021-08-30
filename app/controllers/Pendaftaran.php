<?php

class Pendaftaran extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Pendaftaran';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('pendaftaran/index', $data);
        $this->view('templates/footer', $data);
    }

    //mulai pendaftaran siswa
    public function daftarsiswa()
    {
        if ($this->model('SiswaModel')->tambahSiswa($_POST) > 0) {
            if ($this->model('AyahModel')->tambahAyah($_POST) > 0) {
                if ($this->model('IbuModel')->tambahIbu($_POST) > 0) {
                    Flasher::setMessage('Berhasil', 'didaftarkan', 'success');
                    header('location: ' . base_url . '/pendaftaran');
                }
            }
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/pendaftaran');
            exit;
        }
    }
}
