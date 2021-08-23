<?php

class Login extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Login';
        $this->view('login/index', $data);
    }

    //mulai pendaftaran siswa
}
