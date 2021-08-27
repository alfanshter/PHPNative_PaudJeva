<?php

class Login extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Login';
        $this->view('login/index', $data);
    }

    public function proseslogin()
    {
        if ($row = $this->model('UsersModel')->checklogin($_POST)) {
            $role = $row['role'];
            if ($role == "1") {
                $_SESSION['role'] = $row['role'];
                header('location:' . base_url . '/admin');
            } else if ($role == "0") {
                $_SESSION['role'] = $row['role'];
                header('location:' . base_url . '/user');
            }
        } else {
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('location:' . base_url . '/admin');
    }

    //mulai pendaftaran siswa
}
