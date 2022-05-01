<?php

class DetailFasilitas extends Controller
{
    public function index($id_fasilitas)
    {

        $data['title'] = 'Halaman Detail Siswa';
        $data['detailfasilitas'] = $this->model('FasilitasModel')->getdetailFasilitas($id_fasilitas);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('fasilitas/detail_fasilitas', $data);
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
        if ($this->model('FasilitasModel')->editfoto($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diedit', 'success');
            header('location: ' . base_url . '/fasilitaspaud');
        }
    }
}
