<?php

class TambahSiswa extends Controller
{

    public function index()
    {

        $data['title'] = 'Halaman Dashboard';
        $data['siswa'] = $this->model('SiswaModel')->getsiswa();
        $this->view('siswa/tambahsiswa', $data);
    }

    
    public function insert()
    {
        $password = $_POST['password'];
        $password_ulang = $_POST['password_ulang'];
        if ($password == $password_ulang) {
            if ($this->model('SiswaModel')->insertSiswa($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
                header('location: ' . base_url . '/tambahsiswa');
            } else {
                Flasher::setMessage('gagal', 'ditambahkan', 'danger');
                header('location: ' . base_url . '/tambahsiswa');
            }            
        }else{
            Flasher::setMessage('Password', 'tidak saama', 'danger');
            header('location: ' . base_url . '/tambahsiswa');

        }

    }

    public function delete($id)
    {

        if ($this->model('SiswaModel')->delete($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/tambahsiswa');
        } else {
            Flasher::setMessage('gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/tambahsiswa');
        }
    }

    public function update()
    {
        $password = $_POST['password'];
        $password_ulang = $_POST['password_ulang'];
        if ($password == $password_ulang) {
            if ($this->model('SiswaModel')->update($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate', 'success');
                header('location: ' . base_url . '/tambahsiswa');
            } else {
                Flasher::setMessage('gagal', 'diupdate', 'danger');
                header('location: ' . base_url . '/tambahsiswa');
            }            
        }else{
            Flasher::setMessage('Password', 'tidak saama', 'danger');
            header('location: ' . base_url . '/tambahsiswa');

        }

    }
    


}