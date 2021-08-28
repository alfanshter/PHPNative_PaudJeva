<?php

class NilaiSiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['nilai'] = $this->model('NilaiModel')->getNilai();
        $data['datasiswa_all'] = $this->model('SiswaModel')->getdataallsiswa();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/nilai_siswa', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah_nilai()
    {

        if ($this->model('NilaiModel')->tambahNilai($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/nilaisiswa');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/nilaisiswa');
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
