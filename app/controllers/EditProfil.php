<?php

class EditProfil extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Jadwal';
        $data['admin'] = $this->model('SiswaModel')->getadmin();
        $this->view('editprofil/editprofil',$data);

    }

    public function prosesedit()
    {
        //var_dump($_SESSION['id']);
        if ($this->model('SiswaModel')->updatefotoadmin($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate', 'success');
                header('location: ' . base_url . '/editprofil');
            } else {
                Flasher::setMessage('gagal', 'diupdate', 'danger');
                header('location: ' . base_url . '/editprofil');
            }
    }
}