<?php

class DetailAbsen extends Controller
{
    public function index($id_absen)
    {

        $data['title'] = 'Halaman Detail Absen';
        $data['detailabsen'] = $this->model('AbsenModel')->getAbsenDetail($id_absen);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/detail_absen', $data);
        $this->view('templates/footer', $data);
    }

    public function editAbsen()
    {
        if ($this->model('AbsenModel')->updateAbsen($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diUpdate', 'success');
            header('location: ' . base_url . '/absensiswa');
        } else {
            Flasher::setMessage('Gagal', 'diUpdate', 'danger');
            header('location: ' . base_url . '/absensiswa');
        }
    }
}
