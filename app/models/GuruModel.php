<?php

class GuruModel
{

    private $table = 'tb_guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getallGuru()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getdetailguru($id_guru)
    {
        $query = "SELECT * FROM tb_guru where id_guru = $id_guru";
        $this->db->query($query);
        return $this->db->single();
    }


    public function tambahGuru($data)
    {
        $query = "INSERT INTO tb_guru (nama_guru,nama_lembaga,ttl_guru,ktp_guru,tmt,tahun_kerja,bulan_kerja,status_guru,alamat_rumah,alamat_lembaga,pendidikan_guru,tempatlahir_guru)
         VALUES(:nama_guru,:nama_lembaga,:ttl_guru,:ktp_guru,:tmt,:tahun_kerja,:bulan_kerja,:status_guru,:alamat_rumah,:alamat_lembaga,:pendidikan_guru,:tempatlahir_guru)";
        $this->db->query($query);
        $this->db->bind('nama_guru', $data['nama_guru']);
        $this->db->bind('nama_lembaga', $data['nama_lembaga']);
        $this->db->bind('ttl_guru', $data['ttl_guru']);
        $this->db->bind('ktp_guru', $data['ktp_guru']);
        $this->db->bind('tmt', $data['tmt']);
        $this->db->bind('tahun_kerja', $data['tahun_kerja']);
        $this->db->bind('bulan_kerja', $data['bulan_kerja']);
        $this->db->bind('status_guru', $data['status_guru']);
        $this->db->bind('alamat_rumah', $data['alamat_rumah']);
        $this->db->bind('alamat_lembaga', $data['alamat_lembaga']);
        $this->db->bind('pendidikan_guru', $data['pendidikan_guru']);
        $this->db->bind('tempatlahir_guru', $data['tempatlahir_guru']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editGuru($data)
    {

        $query = "UPDATE tb_guru  
        SET
         nama_guru=:nama_guru, 
         nama_lembaga =:nama_lembaga, 
         ttl_guru =:ttl_guru,
         ktp_guru = :ktp_guru, 
         tmt =:tmt, 
         tahun_kerja =:tahun_kerja,
         bulan_kerja =:bulan_kerja, 
         status_guru=:status_guru , 
         alamat_lembaga =:alamat_lembaga, 
         alamat_rumah = :alamat_rumah,
         pendidikan_guru = :pendidikan_guru,
         tempatlahir_guru = :tempatlahir_guru
            WHERE id_guru = :id_guru";

        $this->db->query($query);
        $this->db->bind('nama_guru', $data['nama_guru']);
        $this->db->bind('nama_lembaga', $data['nama_lembaga']);
        $this->db->bind('ttl_guru', $data['ttl_guru']);
        $this->db->bind('ktp_guru', $data['ktp_guru']);
        $this->db->bind('tmt', $data['tmt']);
        $this->db->bind('tahun_kerja', $data['tahun_kerja']);
        $this->db->bind('bulan_kerja', $data['bulan_kerja']);
        $this->db->bind('status_guru', $data['status_guru']);
        $this->db->bind('alamat_lembaga', $data['alamat_lembaga']);
        $this->db->bind('alamat_rumah', $data['alamat_rumah']);
        $this->db->bind('pendidikan_guru', $data['pendidikan_guru']);
        $this->db->bind('tempatlahir_guru', $data['tempatlahir_guru']);
        $this->db->bind('id_guru', $data['id_guru']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariGuru()
    {
        $key = $_POST['key'];
        $query = "SELECT * FROM tb_guru WHERE  nama_guru LIKE :key";
        $this->db->query($query);
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }

    public function hapusGuru($data)
    {
        $query = "DELETE tb_guru FROM tb_guru  WHERE id_guru = :id_guru";
        $this->db->query($query);
        $this->db->bind('id_guru', $data['id_guru']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
