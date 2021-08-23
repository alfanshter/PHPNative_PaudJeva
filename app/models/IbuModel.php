<?php

class IbuModel
{

    private $table = 'tb_ibu';
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

    public function tambahIbu($data)
    {
        $query = "INSERT INTO tb_ibu (nama,nik,ttl,tempat_lahir,pendidikan_terakhir,pekerjaan,status,penghasilan)
         VALUES(:nama,:nik,:ttl,:tempat_lahir,:pendidikan_terakhir,:pekerjaan,:status,:penghasilan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama_ibu']);
        $this->db->bind('nik', $data['nik_ibu']);
        $this->db->bind('ttl', $data['ttl_ibu']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir_ibu']);
        $this->db->bind('pendidikan_terakhir', $data['pendidikan_ibu']);
        $this->db->bind('pekerjaan', $data['pekerjaan_ibu']);
        $this->db->bind('status', $data['status_ibu']);
        $this->db->bind('penghasilan', $data['penghasilan_ibu']);
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
