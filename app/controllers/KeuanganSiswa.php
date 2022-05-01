<?php

class KeuanganSiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Keuangan Siswa';
        if ($_SESSION["role"] ==0) {
            $data['keuangan'] = $this->model('KeuanganModel')->index();

        }
        else if ($_SESSION["role"] ==1) {
            $data['keuangan'] = $this->model('KeuanganModel')->getUangSiswa();

        }

        $data['siswa'] = $this->model('BiodataModel')->index();
        $this->view('keuangan/keuangan', $data);
    }

    public function carisiswa()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['cari'] = $_POST['cari'];
        $data['keuangan'] = $this->model('KeuanganModel')->cariSiswa();
        $this->view('keuangan/keuangan', $data);
    }

    public function caribulan()
    {
            $data['bulan'] = $_POST['bulan'];
            $data['tahun'] = $_POST['tahun'];
            $data['kelas'] = $_POST['kelas'];
            $data['title'] = 'Halaman Data Siswa';
            $data['keuangan'] = $this->model('KeuanganModel')->cariBulan();
            $this->view('keuangan/keuangan', $data);
    
     }

    public function insert()
    {
        if ($this->model('KeuanganModel')->insert($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/keuangansiswa');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/keuangansiswa');
        }
    }

    public function update()
    {
        if ($this->model('KeuanganModel')->update($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/keuangansiswa');
        } else {
            Flasher::setMessage('gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/keuangansiswa');
        }
    }

    public function delete($id)
    {
        if ($this->model('KeuanganModel')->delete($id) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/keuangansiswa');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/keuangansiswa');
        }
    }

    public function keuangan_pdf()
    {
        if (!$_POST['bulan'] || !$_POST['bulan'] || !$_POST['kelas'] ) {
            Flasher::setMessage('gagal', 'masukkan bulan, tahun, dan kelas', 'danger');
            header('location: ' . base_url . '/keuangansiswa');
        }else{
            $data['bulan'] = $_POST['bulan'];
            $data['tahun'] = $_POST['tahun'];
            $data['kelas'] = $_POST['kelas'];
            $data['title'] = 'Halaman Data Siswa';
            $data['keuangan'] = $this->model('KeuanganModel')->cariBulan();
            $data['sumbiaya'] = $this->model('KeuanganModel')->sumbiaya();
            $this->view('keuangan/keuangan_pdf',$data);
    
        }
    }
}