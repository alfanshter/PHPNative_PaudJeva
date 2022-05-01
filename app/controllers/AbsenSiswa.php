<?php

class AbsenSiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Absen Siswa';
        
        if ($_SESSION["role"] == 0) {
            $data['absen'] = $this->model('AbsenModel')->getAbsen();

        }elseif ($_SESSION["role"] == 1) {
            $data['absen'] = $this->model('AbsenModel')->getAbsenSiswa();
        }
        
        $data['siswa'] = $this->model('BiodataModel')->index();
        $this->view('absen/absen', $data);

    }
    
    

    public function insert()
    {
        if ($this->model('AbsenModel')->insert($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/absensiswa');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/absensiswa');
        }
    }

    public function update()
    {
        if ($this->model('AbsenModel')->update($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/absensiswa');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/absensiswa');
        }
    }

    public function delete($id_absen)
    {
        if ($this->model('AbsenModel')->delete($id_absen) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/absensiswa');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/absensiswa');
        }
    }
}