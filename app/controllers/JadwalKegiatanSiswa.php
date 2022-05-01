<?php

class JadwalKegiatanSiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['jadwal'] = $this->model('JadwalModel')->getJadwal();
        $this->view('dashboard/jadwal_kegiatan_siswa', $data);
        
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

    public function update()
    {
        if ($this->model('JadwalModel')->update($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/jadwalkegiatansiswa');
        } else {
            Flasher::setMessage('gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/jadwalkegiatansiswa');
        }
    }

    public function hapus($id_jadwal)
    {
        if ($this->model('JadwalModel')->deleteJadwal($id_jadwal) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/jadwalkegiatansiswa');
        } else {
            Flasher::setMessage('gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/jadwalkegiatansiswa');
        }
    }
}