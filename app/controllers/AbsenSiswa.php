<?php

class AbsenSiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Absen Siswa';
        $data['absen'] = $this->model('AbsenModel')->getAbsen();
        $data['datasiswa_all'] = $this->model('SiswaModel')->getdataallsiswa();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/absen', $data);
        $this->view('templates/footer', $data);
    }

    public function tambahAbsen()
    {
        if ($this->model('AbsenModel')->tambahAbsen($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/absensiswa');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/absensiswa');
        }
    }

    public function hapusAbsen($id_absen)
    {
        if ($this->model('AbsenModel')->hapusAbsen($id_absen) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/absensiswa');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/absensiswa');
        }
    }
}
