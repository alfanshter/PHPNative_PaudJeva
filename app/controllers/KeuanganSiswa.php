<?php

class KeuanganSiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Keuangan Siswa';
        $data['keuangan'] = $this->model('KeuanganModel')->getKeuangan();
        $data['datasiswa_all'] = $this->model('SiswaModel')->getdataallsiswa();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/keuangan', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah_keuangan()
    {
        if ($this->model('KeuanganModel')->tambahKeuangan($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/keuangansiswa');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/keuangansiswa');
        }
    }

    public function deletejadwal($id_jadwal)
    {
        if ($this->model('JadwalModel')->deleteJadwal($id_jadwal) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/jadwalkegiatansiswa');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/jadwalkegiatansiswa');
        }
    }
}
