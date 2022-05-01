<?php

class KegiatanLuarPaud extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['kegiatan'] = $this->model('KegiatanLuarPaudModel')->index();
        $this->view('kegiatanluarpaud/kegiatanluarpaud', $data);
     
    }

    public function carikegiatanluarpaud()
    {
        $data['title'] = 'Halaman Data Guru';
        $data['kegiatan'] = $this->model('KegiatanLuarPaudModel')->cariKegiatanLuarPaud();
        $this->view('kegiatanluarpaud/kegiatanluarpaud', $data);
    }


    
    public function delete()
    {
        if ($this->model('KegiatanLuarPaudModel')->delete($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/kegiatanluarpaud');
        } else {
            Flasher::setMessage('gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/kegiatanluarpaud');
        }
    }

    public function insert()
    {
        if ($this->model('KegiatanLuarPaudModel')->insert($_POST,$_FILES) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/kegiatanluarpaud');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/kegiatanluarpaud');
        }
    }

    public function update()
    {
        if ($_FILES['foto_kegiatan']['name']) {
            if ($this->model('KegiatanLuarPaudModel')->update_foto($_POST,$_FILES) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate', 'success');
                header('location: ' . base_url . '/kegiatanluarpaud');
            } else {
                Flasher::setMessage('gagal', 'diupdate', 'danger');
                header('location: ' . base_url . '/kegiatanluarpaud');
            }
 
        }else{
            if ($this->model('KegiatanLuarPaudModel')->update($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate', 'success');
                header('location: ' . base_url . '/kegiatanluarpaud');
            } else {
                Flasher::setMessage('gagal', 'diupdate', 'danger');
                header('location: ' . base_url . '/kegiatanluarpaud');
            }
        }
    }


}