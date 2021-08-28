<?php

class NilaiModel
{

    private $table = 'tb_nilai';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getNilai()
    {
        $query = "SELECT * FROM tb_siswa s JOIN tb_nilai n ON s.nik = n.nik_siswa ORDER BY n.tanggal_nilai DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }
}
