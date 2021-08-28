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

    public function getDetailJadwal($id_jadwal)
    {
        $query = "SELECT * FROM tb_jadwal WHERE id_jadwal = $id_jadwal";
        $this->db->query($query);
        return $this->db->single();
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

    public function updatejadwal($data)
    {
        $id_jadwal = $data['id_jadwal'];
        $query = "UPDATE tb_jadwal 
        SET
         waktu_jadwal = :waktu_jadwal,
         kegiatan_jadwal = :kegiatan_jadwal
         WHERE id_jadwal = $id_jadwal";
        $this->db->query($query);
        $this->db->bind('waktu_jadwal', $data['waktu_jadwal']);
        $this->db->bind('kegiatan_jadwal', $data['nama_kegiatan']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
