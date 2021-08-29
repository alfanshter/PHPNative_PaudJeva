<?php

class DetailKeuangan extends Controller
{
    public function index($id_siswa)
    {

        $data['title'] = 'Halaman Detail Keuangan';
        $data['detailkeuangan'] = $this->model('KeuanganModel')->getKeuanganDetail($id_siswa);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/detail_keuangan', $data);
        $this->view('templates/footer', $data);
    }

    public function editKeuangan()
    {
        if ($this->model('KeuanganModel')->updateKeuangan($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diUpdate', 'success');
            header('location: ' . base_url . '/keuangansiswa');
        } else {
            Flasher::setMessage('Gagal', 'diUpdate', 'danger');
            header('location: ' . base_url . '/keuangansiswa');
        }
    }
}
