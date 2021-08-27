<?php

class SiswaModel
{

    private $table = 'tb_siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKategori()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getdataallsiswa()
    {
        $query = "SELECT * FROM tb_siswa";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getdatasiswa($id_siswa)
    {
        $query = "SELECT * FROM tb_siswa s JOIN tb_ayah a ON s.nik_ayah=a.nik_ayah JOIN tb_ibu i ON s.nik_ibu=i.nik_ibu WHERE s.id_siswa = $id_siswa";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tambahSiswa($data)
    {
        $query = "INSERT INTO tb_siswa (nama,nik_ayah,nik_ibu,ttl,tempat_lahir,jk,nik,alamat,agama,jenis_tinggal,alat_transportasi,nomor_telepon,status_dalam_keluarga,penerima_kps,no_kps)
         VALUES(:nama,:nik_ayah,:nik_ibu,:ttl,:tempat_lahir,:jk,:nik,:alamat,:agama,:jenis_tinggal,:alat_transportasi,:nomor_telepon,:status_dalam_keluarga,:penerima_kps,:no_kps)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nik_ayah', $data['nik_ayah']);
        $this->db->bind('nik_ibu', $data['nik_ibu']);
        $this->db->bind('ttl', $data['ttl']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('jenis_tinggal', $data['jenis_tinggal']);
        $this->db->bind('alat_transportasi', $data['alat_transportasi']);
        $this->db->bind('nomor_telepon', $data['nomor_telepon']);
        $this->db->bind('status_dalam_keluarga', $data['status_dalam_keluarga']);
        $this->db->bind('penerima_kps', $data['penerima_kps']);
        $this->db->bind('no_kps', $data['no_kps']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataKategori($data)
    {
    }

    public function deleteKategori($id)
    {
    }

    public function cariKategori()
    {
    }
}
