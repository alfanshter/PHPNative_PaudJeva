<?php

class Fasilitas extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Data Guru';
        $data['fasilitas'] = $this->model('FasilitasModel')->index();
        $this->view('fasilitas/fasilitas', $data);
    }

    public function insert()
    {
        if ($this->model('FasilitasModel')->insert($_POST, $_FILES) > 0) {
            Flasher::setMessage('Berhasil', 'ditambah', 'success');
            header('location: ' . base_url . '/fasilitas');
        } else {
            Flasher::setMessage('Gagal', 'ditambah', 'danger');
            header('location: ' . base_url . '/fasilitas');
        }
    }


    public function delete()
    {
        if ($this->model('FasilitasModel')->delete($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/fasilitas');
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/fasilitas');
            exit;
        }
    }

    public function update()
    {
        if ($_FILES['foto']['name']) {
            if ($this->model('FasilitasModel')->update_foto($_POST,$_FILES) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate', 'success');
                header('location: ' . base_url . '/fasilitas');
            } else {
                Flasher::setMessage('gagal', 'diupdate', 'danger');
                header('location: ' . base_url . '/fasilitas');
            }
 
        }else{
            if ($this->model('FasilitasModel')->update($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate', 'success');
                header('location: ' . base_url . '/fasilitas');
            } else {
                Flasher::setMessage('gagal', 'diupdate', 'danger');
                header('location: ' . base_url . '/fasilitas');
            }
        }
    }


}