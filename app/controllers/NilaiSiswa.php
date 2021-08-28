<?php

class NilaiSiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['nilai'] = $this->model('NilaiModel')->getNilai();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/nilai_siswa', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah_jadwal()
    {
        if ($this->model('JadwalModel')->insertJadwal($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/jadwalkegiatansiswa');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/jadwalkegiatansiswa');
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
