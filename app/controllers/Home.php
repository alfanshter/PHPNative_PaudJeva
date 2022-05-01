<?php

class Home extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Jadwal';
        $data['jadwal'] = $this->model('JadwalModel')->getJadwal();
        $this->view('home/index',$data);

    }
}