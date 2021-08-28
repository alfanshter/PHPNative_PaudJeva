<?php

class DetailJadwalKegiatanSiswa extends Controller
{
    public function index($id_jadwal)
    {

        $data['title'] = 'Halaman Detail Jadwal Kegiatan Siswa';
        $data['detailjadwal'] = $this->model('JadwalModel')->getDetailJadwal($id_jadwal);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/detail_jadwal_kegiatan_siswa', $data);
        $this->view('templates/footer', $data);
    }

    public function editjadwal()
    {
        if ($this->model('JadwalModel')->updatejadwal($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diUpdate', 'success');
            header('location: ' . base_url . '/jadwalkegiatansiswa');
        } else {
            Flasher::setMessage('Gagal', 'diUpdate', 'danger');
            header('location: ' . base_url . '/jadwalkegiatansiswa');
        }
    }
}
