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

        $data['checkusername'] = $this->model('SiswaModel')->checkusername($_POST['username']);
        if ($data['checkusername'] == true) {
            Flasher::setMessage('username', 'Sudah terdaftar', 'danger');
            header('location: ' . base_url . '/pendaftaran');
        } else {
            $data['checknik'] = $this->model('SiswaModel')->checknik($_POST['nik']);
            if ($data['checknik'] == true) {
                Flasher::setMessage('NIK', 'Sudah terdaftar', 'danger');
                header('location: ' . base_url . '/pendaftaran');
            } else {
                if ($this->model('SiswaModel')->tambahSiswa($_POST, $_FILES) > 0) {
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
    }
}
