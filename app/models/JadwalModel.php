<?php

class JadwalModel
{

    private $table = 'tb_jadwal';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getJadwal()
    {
        $query = "SELECT * FROM tb_jadwal";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function insertJadwal($data)
    {
        $query = "INSERT INTO tb_jadwal (waktu_jadwal, kegiatan_jadwal) 
        VALUES (:jadwal,:nama_kegiatan);";
        $this->db->query($query);
        $this->db->bind('jadwal', $data['jadwal']);
        $this->db->bind('nama_kegiatan', $data['nama_kegiatan']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
