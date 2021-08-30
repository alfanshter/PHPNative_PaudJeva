<?php

class AbsenModel
{

    private $table = 'tb_absen';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAbsen()
    {
        $query = "SELECT * FROM tb_absen a JOIN tb_siswa s ON a.nik_absen = s.nik ORDER BY a.tanggal_absen DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getAbsenSiswa($nik_absen)
    {
        $query = "SELECT * FROM tb_absen a JOIN tb_siswa s ON a.nik_absen = s.nik   WHERE nik_absen = $nik_absen ORDER BY a.tanggal_absen DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }



    public function getAbsenDetail($id_absen)
    {
        $query = "SELECT * FROM tb_absen WHERE id_absen = $id_absen";
        $this->db->query($query);
        return $this->db->single();
    }

    public function tambahAbsen($data)
    {
        $query = "INSERT INTO tb_absen (nik_absen,tanggal_absen,kehadiran,keterangan)
         VALUES(:nik_absen,:tanggal_absen,:kehadiran,:keterangan)";
        $this->db->query($query);
        $this->db->bind('nik_absen', $data['nik_absen']);
        $this->db->bind('tanggal_absen', $data['tanggal_absen']);
        $this->db->bind('kehadiran', $data['kehadiran']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateAbsen($data)
    {
        $query = "UPDATE tb_absen  
        SET
            tanggal_absen = :tanggal_absen, 
            kehadiran =:kehadiran,
            keterangan = :keterangan
        WHERE id_absen = :id_absen";

        $this->db->query($query);
        $this->db->bind('tanggal_absen', $data['tanggal_absen']);
        $this->db->bind('kehadiran', $data['kehadiran']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id_absen', $data['id_absen']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusAbsen($data)
    {
        $query = "DELETE FROM tb_absen WHERE id_absen = $data";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
