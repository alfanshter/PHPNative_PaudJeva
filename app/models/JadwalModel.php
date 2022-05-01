<?php

class JadwalModel
{

    private $table = 'jadwal_kegiatans';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getJadwal()
    {
        $query = "SELECT * FROM jadwal_kegiatans";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getDetailJadwal($id)
    {
        $query = "SELECT * FROM jadwal_kegiatans WHERE id = $id";
        $this->db->query($query);
        return $this->db->single();
    }
    public function insertJadwal($data)
    {
        $query = "INSERT INTO jadwal_kegiatans (jadwal, kegiatan) 
        VALUES (:jadwal,:kegiatan);";
        $this->db->query($query);
        $this->db->bind('jadwal', $data['jadwal']);
        $this->db->bind('kegiatan', $data['kegiatan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $id = $data['id'];
        $query = "UPDATE jadwal_kegiatans 
        SET
         jadwal = :jadwal,
         kegiatan = :kegiatan
         WHERE id = $id";
        $this->db->query($query);
        $this->db->bind('jadwal', $data['jadwal']);
        $this->db->bind('kegiatan', $data['kegiatan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteJadwal($id)
    {
        $query = "DELETE FROM jadwal_kegiatans WHERE id = $id";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}