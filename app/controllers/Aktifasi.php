<?php

class Aktifasi extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Aktifasi';
        $this->view('aktifasi/index', $data);
    }

    //mulai pendaftaran siswa
}
