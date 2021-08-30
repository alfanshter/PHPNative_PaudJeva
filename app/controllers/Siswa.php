<?php

class Siswa extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Dashboard';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer', $data);
    }

    public function biodata()
    {

        $nik_siswa = $_SESSION['id_siswa'];
        $data['title'] = 'Halaman Biodata';
        $data['biodata'] = $this->model('SiswaModel')->getbiodata($nik_siswa);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('siswa/biodata', $data);
        $this->view('templates/footer', $data);
    }

    public function nilai()
    {

        $nik_siswa = $_SESSION['id_siswa'];
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
        $nik_siswa = $_SESSION['id_siswa'];
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
        $nik_siswa = $_SESSION['id_siswa'];
        $data['title'] = 'Halaman Absen Siswa';
        $data['absen'] = $this->model('AbsenModel')->getAbsenSiswa($nik_siswa);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('siswa/absen', $data);
        $this->view('templates/footer', $data);
    }
}
