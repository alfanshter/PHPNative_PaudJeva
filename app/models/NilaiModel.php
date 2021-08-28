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

    public function tambahNilai($data)
    {
        $query = "INSERT INTO tb_nilai (nik_siswa,bermain,ikrar_bersama,senam_irama,bernyanyi,berdoa,pijakan_sebelum_bermain,pijakan_setelah_bermain,tanggal_nilai)
         VALUES(:nik_siswa,:bermain,:ikrar_bersama,:senam_irama,:bernyanyi,:berdoa,:pijakan_sebelum_bermain,:pijakan_setelah_bermain,:tanggal_nilai)";
        $this->db->query($query);
        $this->db->bind('nik_siswa', $data['nik_siswa']);
        $this->db->bind('bermain', $data['bermain']);
        $this->db->bind('ikrar_bersama', $data['ikrar_bersama']);
        $this->db->bind('senam_irama', $data['senam_irama']);
        $this->db->bind('bernyanyi', $data['bernyanyi']);
        $this->db->bind('berdoa', $data['berdoa']);
        $this->db->bind('pijakan_sebelum_bermain', $data['pijakan_sebelum_bermain']);
        $this->db->bind('pijakan_setelah_bermain', $data['pijakan_setelah_bermain']);
        $this->db->bind('tanggal_nilai', $data['tanggal_nilai']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
