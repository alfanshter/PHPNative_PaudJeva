<?php

class DetailGuru extends Controller
{
    public function index($id_guru)
    {

        $data['title'] = 'Halaman Detail Siswa';
        $data['detailguru'] = $this->model('GuruModel')->getdetailguru($id_guru);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('guru/detail_guru', $data);
        $this->view('templates/footer', $data);
    }

    public function editguru()
    {
        if ($this->model('GuruModel')->editGuru($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diUpdate', 'success');
            header('location: ' . base_url . '/dataguru');
        } else {
            Flasher::setMessage('Gagal', 'diUpdate', 'danger');
            header('location: ' . base_url . '/dataguru');
        }
    }

    public function ProsesEditFoto()
    {
        if ($this->model('GuruModel')->editfoto($_FILES, $_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diedit', 'success');
            header('location: ' . base_url . '/dataguru');
        }
    }
}
