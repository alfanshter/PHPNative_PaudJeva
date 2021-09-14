<?php

class Home extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Jadwal';
        $data['jadwal'] = $this->model('JadwalModel')->getJadwal();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}
