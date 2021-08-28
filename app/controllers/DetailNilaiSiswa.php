<?php

class DetailNilaiSiswa extends Controller
{
    public function index($id_siswa)
    {

        $data['title'] = 'Halaman Detail Nilai Siswa';
        $data['detailnilai'] = $this->model('NilaiModel')->getNilaiDetail($id_siswa);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/detail_nilai_siswa', $data);
        $this->view('templates/footer', $data);
    }

    public function editNilai()
    {
        if ($this->model('NilaiModel')->updateNilai($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diUpdate', 'success');
            header('location: ' . base_url . '/nilaisiswa');
        } else {
            Flasher::setMessage('Gagal', 'diUpdate', 'danger');
            header('location: ' . base_url . '/nilaisiswa');
        }
    }
}
