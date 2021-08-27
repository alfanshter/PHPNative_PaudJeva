<?php

class AyahModel
{

    private $table = 'tb_ayah';
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

    public function getKategoriById($id)
    {
    }

    public function tambahAyah($data)
    {
        $query = "INSERT INTO tb_ayah (nama_ayah,nik_ayah,ttl_ayah,tempat_lahir_ayah,pendidikan_terakhir_ayah,pekerjaan_ayah,status_ayah,penghasilan_ayah)
         VALUES(:nama,:nik,:ttl,:tempat_lahir,:pendidikan_terakhir,:pekerjaan,:status,:penghasilan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama_ayah']);
        $this->db->bind('nik', $data['nik_ayah']);
        $this->db->bind('ttl', $data['ttl_ayah']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir_ayah']);
        $this->db->bind('pendidikan_terakhir', $data['pendidikan_ayah']);
        $this->db->bind('pekerjaan', $data['pekerjaan_ayah']);
        $this->db->bind('status', $data['status_ayah']);
        $this->db->bind('penghasilan', $data['penghasilan_ayah']);
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
