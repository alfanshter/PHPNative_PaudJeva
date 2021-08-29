<?php

class Admin extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Admin';
        $data['admin'] = $this->model('UsersModel')->getAdmin();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer', $data);
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
        $data['datasiswa_all'] = $this->model('SiswaModel')->cariSiswa();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/datasiswa', $data);
        $this->view('templates/footer', $data);
    }
}
