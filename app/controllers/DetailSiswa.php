<?php

class DetailSiswa extends Controller
{
    public function index($id_siswa)
    {

        $data['title'] = 'Halaman Detail Siswa';
        $data['detailsiswa'] = $this->model('SiswaModel')->getdatasiswa($id_siswa);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/detailsiswa', $data);
        $this->view('templates/footer', $data);
    }

    public function editsiswa()
    {
        if ($this->model('SiswaModel')->updateSiswa($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diUpdate', 'success');
            header('location: ' . base_url . '/datasiswa');
        } else {
            Flasher::setMessage('Gagal', 'diUpdate', 'danger');
            header('location: ' . base_url . '/datasiswa');
        }
    }
}
