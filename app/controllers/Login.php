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
                $_SESSION['id_siswa'] = $row['kode_siswa'];
                header('location:' . base_url . '/admin');
            } else if ($role == "2") {
                $_SESSION['role'] = $row['role'];
                $_SESSION['id_siswa'] = $row['kode_siswa'];
                header('location:' . base_url . '/siswa');
            }
        } else {
            Flasher::setMessage('Gagal', 'Login', 'danger');
            header('location: ' . base_url . '/login');
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
