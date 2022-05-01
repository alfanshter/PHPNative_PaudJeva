<?php

class Biodata extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['siswa'] = $this->model('SiswaModel')->getsiswa();
        if ($_SESSION["role"]==0) {
            $data['biodata'] = $this->model('BiodataModel')->index();
            $this->view('biodata/biodata', $data);
    
        }elseif($_SESSION["role"]==1){
            $id = $_SESSION["id"];
            $data['biodata'] = $this->model('BiodataModel')->detail_siswa($id);

            $this->view('biodata/editbiodata', $data);
       
        }
    }

    public function cariSiswa()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['biodata'] = $this->model('BiodataModel')->cariSiswa();
        $this->view('biodata/biodata', $data);
    }


    public function detail($id)
    {
        $data['title'] = 'Halaman Dashboard';
        $data['biodata'] = $this->model('BiodataModel')->detail($id);
        $this->view('biodata/editbiodata', $data);
    }

    public function insert()
    {
        if ($this->model('BiodataModel')->insert($_POST,$_FILES) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/biodata');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/biodata');
        }
    }

    public function update()
    {
        if ($_FILES['foto']['name']) {
            if ($this->model('BiodataModel')->update_foto($_POST,$_FILES) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate', 'success');
                header('location: ' . base_url . '/biodata');
            } else {
                Flasher::setMessage('gagal', 'diupdate', 'danger');
                header('location: ' . base_url . '/biodata');
            }
 
        }else{
            if ($this->model('BiodataModel')->update($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate', 'success');
                header('location: ' . base_url . '/biodata');
            } else {
                Flasher::setMessage('gagal', 'diupdate', 'danger');
                header('location: ' . base_url . '/biodata');
            }
        }

    }

    public function hapus()
    {

        if ($this->model('BiodataModel')->delete($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/biodata');
        } else {
            Flasher::setMessage('gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/biodata');
        }
    }


}