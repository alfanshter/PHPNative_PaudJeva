<?php

class DataPendaftaran extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Data Pendaftaran';
        $data['datasiswa_all'] = $this->model('SiswaModel')->getSiswaPendaftaran();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('datapendaftaran/index', $data);
        $this->view('templates/footer', $data);
    }

    public function deletesiswa()
    {
        if ($this->model('SiswaModel')->hapussiswaDaftar($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/datapendaftaran');
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/datapendaftaran');
            exit;
        }
    }

    public function carisiswa()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['datasiswa_all'] = $this->model('SiswaModel')->cariSiswadaftar();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('datapendaftaran/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id)
    {

        $data['title'] = 'Halaman Detail Siswa';
        $data['detailsiswa'] = $this->model('SiswaModel')->getdatasiswa($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('datapendaftaran/detailpendaftaran', $data);
        $this->view('templates/footer', $data);
    }

    public function detail_aktifasi($id)
    {

        $data['title'] = 'Halaman Detail Siswa';
        $data['detailsiswa'] = $this->model('SiswaModel')->getdatasiswa($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('datapendaftaran/detailaktifasi', $data);
        $this->view('templates/footer', $data);
    }

    public function editsiswa()
    {
        if ($this->model('SiswaModel')->updateSiswa($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diUpdate', 'success');
            header('location: ' . base_url . '/datapendaftaran');
        } else {
            Flasher::setMessage('Gagal', 'diUpdate', 'danger');
            header('location: ' . base_url . '/datapendaftaran');
        }
    }

    public function aktifasiSiswa()
    {

        if ($this->model('SiswaModel')->aktifasiSiswa($_POST) > 0) {

            if ($this->model('SiswaModel')->registerAkun($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'DiAktifasi', 'success');
                header('location: ' . base_url . '/datapendaftaran');
            }
        } else {
            Flasher::setMessage('Gagal', 'DiAktifasi', 'danger');
            header('location: ' . base_url . '/datapendaftaran');
        }
    }

    public function editfoto($nik)
    {


        $data['title'] = 'Halaman Foto';
        $data['biodata'] = $this->model('SiswaModel')->getbiodata($nik);

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('datapendaftaran/detailfoto', $data);
        $this->view('templates/footer', $data);
    }

    public function editkk($nik)
    {


        $data['title'] = 'Halaman Foto';
        $data['biodata'] = $this->model('SiswaModel')->getbiodata($nik);

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('datapendaftaran/detailfotokk', $data);
        $this->view('templates/footer', $data);
    }

    public function editakte($nik)
    {


        $data['title'] = 'Halaman Foto';
        $data['biodata'] = $this->model('SiswaModel')->getbiodata($nik);

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('datapendaftaran/detailfotoakte', $data);
        $this->view('templates/footer', $data);
    }
    public function ProsesEditFoto()
    {

        if ($this->model('SiswaModel')->editFotoSiswaAdmin($_POST, $_FILES) > 0) {
            Flasher::setMessage('Berhasil', 'DiAktifasi', 'success');
            header('location: ' . base_url . '/datapendaftaran');
        } else {
            Flasher::setMessage('Gagal', 'DiAktifasi', 'danger');
            header('location: ' . base_url . '/datapendaftaran');
        }
    }

    public function ProsesEditKK()
    {

        if ($this->model('SiswaModel')->editKKSiswaAdmin($_POST, $_FILES) > 0) {
            Flasher::setMessage('Berhasil', 'DiAktifasi', 'success');
            header('location: ' . base_url . '/datapendaftaran');
        } else {
            Flasher::setMessage('Gagal', 'DiAktifasi', 'danger');
            header('location: ' . base_url . '/datapendaftaran');
        }
    }

    public function ProsesEditAkte()
    {

        if ($this->model('SiswaModel')->editAkteSiswaAdmin($_POST, $_FILES) > 0) {
            Flasher::setMessage('Berhasil', 'DiAktifasi', 'success');
            header('location: ' . base_url . '/datapendaftaran');
        } else {
            Flasher::setMessage('Gagal', 'DiAktifasi', 'danger');
            header('location: ' . base_url . '/datapendaftaran');
        }
    }
}
