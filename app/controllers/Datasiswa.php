<?php

class Datasiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['datasiswa_all'] = $this->model('SiswaModel')->getdataallsiswa();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/datasiswa', $data);
        $this->view('templates/footer', $data);
    }
}
