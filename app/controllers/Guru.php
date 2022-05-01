<?php

class Guru extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['guru'] = $this->model('GuruModel')->index();
        $this->view('guru/guru', $data);
     
    }

    public function cariguru()
    {
        $data['title'] = 'Halaman Data Guru';
        $data['guru'] = $this->model('GuruModel')->cariGuru();
        $this->view('guru/guru', $data);
    }


    
    public function delete()
    {
        if ($this->model('GuruModel')->delete($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/guru');
        } else {
            Flasher::setMessage('gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/guru');
        }
    }

    public function insert()
    {
        if ($this->model('GuruModel')->insert($_POST,$_FILES) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/guru');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/guru');
        }
    }

    public function update()
    {
        if ($_FILES['foto']['name']) {
            if ($this->model('GuruModel')->update_foto($_POST,$_FILES) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate', 'success');
                header('location: ' . base_url . '/guru');
            } else {
                Flasher::setMessage('gagal', 'diupdate', 'danger');
                header('location: ' . base_url . '/guru');
            }
 
        }else{
            if ($this->model('GuruModel')->update($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate', 'success');
                header('location: ' . base_url . '/guru');
            } else {
                Flasher::setMessage('gagal', 'diupdate', 'danger');
                header('location: ' . base_url . '/guru');
            }
        }
    }


}