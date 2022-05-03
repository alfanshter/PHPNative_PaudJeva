<?php

class NilaiSiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Data Siswa';
        if ($_SESSION["role"] == 0) {
            $data['nilai'] = $this->model('NilaiModel')->index();
        } elseif ($_SESSION["role"] == 1) {
            $data['nilai'] = $this->model('NilaiModel')->getNilaisiswa();
        }

        $data['siswa'] = $this->model('BiodataModel')->index();
        $this->view('nilai/nilai', $data);
    }

    public function carisiswa()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['cari'] = $_POST['cari'];
        $data['nilai'] = $this->model('NilaiModel')->cariNilai();
        $this->view('nilai/nilai', $data);
    }

    public function carikelas()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['cari'] = $_POST['cari'];
        $data['tanggal'] = $_POST['tanggal'];
        $data['nilai'] = $this->model('NilaiModel')->cariNilai_kelas();
        $this->view('nilai/nilai', $data);
    }

    public function caritahun()
    {
        $data['title'] = 'Halaman Data Siswa';
        $data['tahun'] = $_POST['tahun'];
        $data['nilai'] = $this->model('NilaiModel')->cariTahun();
        $this->view('nilai/nilai', $data);
    }

    public function insert()
    {

        if ($this->model('NilaiModel')->insert($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/nilaisiswa');
        } else {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/nilaisiswa');
        }
    }

    public function update()
    {

        if ($this->model('NilaiModel')->update($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/nilaisiswa');
        } else {
            Flasher::setMessage('gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/nilaisiswa');
        }
    }

    public function editnilai($id)
    {
        $data['title'] = 'Halaman Edit Siswa';
        $data['nilai'] = $this->model('NilaiModel')->detail($id);
        $this->view('nilai/editnilai', $data);
    }

    public function delete($id)
    {

        if ($this->model('NilaiModel')->delete($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/nilaisiswa');
        } else {
            Flasher::setMessage('gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/nilaisiswa');
        }
    }

    public function nilai_pdf()
    {
        $last_url = $_POST['last_url'];

        if ($last_url == "carikelas") {
            $cari = $_POST['cari'];
            $data['nilai'] = $this->model('NilaiModel')->cariNilai_kelas();
            $data['kelas'] = $cari;
            $this->view('nilai/nilai_cetakpdf', $data);
        } elseif ($last_url == "carisiswa") {
            Flasher::setMessage('gagal', 'harap masukkan tanggal dan kelas', 'danger');
            header('location: ' . base_url . '/nilaisiswa');
        } else {
            Flasher::setMessage('gagal', 'harap masukkan tanggal dan kelas', 'danger');
            header('location: ' . base_url . '/nilaisiswa');
        }
    }

    public function cetakpdf($tahun)
    {
        $data['nilai'] = $this->model('NilaiModel')->pdfSiswa($tahun);
        $this->view('nilai/nilai_cetakpdfsiswa', $data);
    }
}
