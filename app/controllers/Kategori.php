<?php

class Kategori extends Controller
{
    public function index()
    {


        $data['title'] = 'Data Kategori';
        $data['kategori'] = $this->model('SiswaModel')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kategori/index', $data);
        $this->view('templates/footer');
    }
    public function cari()
    {
    }

    public function edit($id)
    {
    }

    public function tambah()
    {
    }

    public function simpanKategori()
    {
    }

    public function updateKategori()
    {
    }

    public function hapus($id)
    {
    }
}
