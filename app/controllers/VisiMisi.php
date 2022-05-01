<?php

class VisiMisi extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['visimisi'] = $this->model('VisiMisiModel')->index();
        $this->view('visimisi/visimisi', $data);

    }

    public function insert()
    {
        $data['visimisi'] = $this->model('VisiMisiModel')->index();
        if ($data['visimisi']) {
            
            if ($this->model('VisiMisiModel')->update($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
                header('location: ' . base_url . '/visimisi');
            } else {
                Flasher::setMessage('gagal', 'ditambahkan', 'danger');
                header('location: ' . base_url . '/visimisi');
            }
        }else{

            if ($this->model('VisiMisiModel')->insert($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
                header('location: ' . base_url . '/visimisi');
            } else {
                Flasher::setMessage('gagal', 'ditambahkan', 'danger');
                header('location: ' . base_url . '/visimisi');
            }
    
        }
    }


}