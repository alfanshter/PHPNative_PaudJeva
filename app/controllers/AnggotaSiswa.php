<?php

class AnggotaSiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['datasiswa_all'] = $this->model('SiswaModel')->getdataallsiswa();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('anggotasiswa/index', $data);
        $this->view('templates/footer', $data);
    }

    public function deletesiswa()
    {
        if ($this->model('SiswaModel')->hapussiswa($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/anggotasiswa');
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/anggotasiswa');
            exit;
        }
    }

    public function carisiswa()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['datasiswa_all'] = $this->model('SiswaModel')->cariSiswa();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('anggotasiswa/index', $data);
        $this->view('templates/footer', $data);
    }
}
