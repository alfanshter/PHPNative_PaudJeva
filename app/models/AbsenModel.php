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
        $query = "SELECT a.*, b.nama FROM absen_siswas a JOIN users b ON a.user_id = b.id ORDER BY a.tanggal DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getAbsenSiswa()
    {
        $id = $_SESSION["id"];
        $query = "SELECT * FROM absen_siswas a JOIN users u ON a.user_id = u.id   WHERE a.user_id = $id ORDER BY a.tanggal DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }



    public function getAbsenDetail($id_absen)
    {
        $query = "SELECT * FROM tb_absen WHERE id_absen = $id_absen";
        $this->db->query($query);
        return $this->db->single();
    }

    public function insert($data)
    {

        $query = "INSERT INTO absen_siswas (user_id,tanggal,kelas,absen,keterangan)
         VALUES(:user_id,:tanggal,:kelas,:absen,:keterangan)";
        $this->db->query($query);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('absen', $data['absen']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE absen_siswas  
        SET
            tanggal = :tanggal, 
            kelas =:kelas,
            absen = :absen,
            keterangan = :keterangan
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('absen', $data['absen']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($data)
    {
        $query = "DELETE FROM absen_siswas WHERE id = $data";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}