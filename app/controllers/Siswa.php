<?php

class Siswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['siswa'] = $this->model('BiodataModel')->index();
        $this->view('siswa/siswa', $data);
    }

    public function carisiswa()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['siswa'] = $this->model('BiodataModel')->cariSiswa();
        $this->view('siswa/siswa', $data);
    }

    public function carikelas()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['siswa'] = $this->model('BiodataModel')->cariKelas();
        $this->view('siswa/siswa', $data);
    }
    
    public function tambahsiswa()
    {

        $data['title'] = 'Halaman Dashboard';
        $this->view('siswa/tambahsiswa', $data);
     }

    public function biodata()
    {

        $nik_siswa = $_SESSION['id'];
        $data['title'] = 'Halaman Biodata';
        $data['biodata'] = $this->model('SiswaModel')->getbiodata($nik_siswa);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('siswa/biodata', $data);
        $this->view('templates/footer', $data);
    }

    public function nilai()
    {

        $nik_siswa = $_SESSION['id'];
        $data['title'] = 'Halaman Nilai';
        $data['detailnilai'] = $this->model('NilaiModel')->getNilaisiswa($nik_siswa);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('siswa/nilai', $data);
        $this->view('templates/footer', $data);
    }

    public function jadwal()
    {
        $data['title'] = 'Halaman Jadwal';
        $data['jadwal'] = $this->model('JadwalModel')->getJadwal();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('siswa/jadwal', $data);
        $this->view('templates/footer', $data);
    }

    public function uang()
    {
        $nik_siswa = $_SESSION['id'];
        $data['title'] = 'Halaman Keuangan Siswa';
        $data['keuangan'] = $this->model('KeuanganModel')->getUangSiswa($nik_siswa);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('siswa/uang', $data);
        $this->view('templates/footer', $data);
    }

    public function guru()
    {
        $data['title'] = 'Halaman Data Guru';
        $data['dataguru'] = $this->model('GuruModel')->getallGuru();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('siswa/guru', $data);
        $this->view('templates/footer', $data);
    }


    public function absen()
    {
        $nik_siswa = $_SESSION['id'];
        $data['title'] = 'Halaman Absen Siswa';
        $data['absen'] = $this->model('AbsenModel')->getAbsenSiswa($nik_siswa);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('siswa/absen', $data);
        $this->view('templates/footer', $data);
    }

    public function editfoto()
    {
        $data['foto'] = $this->model('SiswaModel')->getbiodata($_SESSION['id']);
        $data['title'] = 'Halaman Absen Siswa';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('siswa/editfoto', $data);
        $this->view('templates/footer', $data);
    }

    public function ProsesEditFoto()
    {
        if ($this->model('SiswaModel')->editfoto($_FILES) > 0) {
            Flasher::setMessage('Berhasil', 'diedit', 'success');
            header('location: ' . base_url . '/siswa/editfoto');
        }
    }
}