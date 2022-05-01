<?php

class DataGuru extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Data Guru';
        $data['dataguru'] = $this->model('GuruModel')->getallGuru();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer', $data);
    }

    public function TambahGuru()
    {
        if ($this->model('GuruModel')->tambahGuru($_POST, $_FILES) > 0) {
            Flasher::setMessage('Berhasil', 'ditambah', 'success');
            header('location: ' . base_url . '/dataguru');
        } else {
            Flasher::setMessage('Gagal', 'ditambah', 'success');
            header('location: ' . base_url . '/dataguru');
        }
    }
    public function hapusGuru()
    {
        if ($this->model('GuruModel')->hapusGuru($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/dataguru');
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/dataguru');
            exit;
        }
    }

    public function cariGuru()
    {
        $data['title'] = 'Halaman Data Guru';
        $data['dataguru'] = $this->model('GuruModel')->cariGuru();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer', $data);
    }
}
