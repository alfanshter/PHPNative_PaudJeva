<?php

class SiswaModel
{

    private $table = 'tb_siswa';
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

    public function getdataallsiswa()
    {
        $query = "SELECT * FROM tb_siswa WHERE status = 1";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getdatasiswa($id_siswa)
    {
        $query = "SELECT * FROM tb_siswa s JOIN tb_ayah a ON s.nik_ayah=a.nik_ayah JOIN tb_ibu i ON s.nik_ibu=i.nik_ibu WHERE s.id_siswa = $id_siswa";
        $this->db->query($query);
        return $this->db->single();
    }

    public function tambahSiswa($data)
    {
        $query = "INSERT INTO tb_siswa (nama,nik_ayah,nik_ibu,ttl,tempat_lahir,jk,nik,alamat,agama,jenis_tinggal,alat_transportasi,nomor_telepon,status_dalam_keluarga,penerima_kps,no_kps)
         VALUES(:nama,:nik_ayah,:nik_ibu,:ttl,:tempat_lahir,:jk,:nik,:alamat,:agama,:jenis_tinggal,:alat_transportasi,:nomor_telepon,:status_dalam_keluarga,:penerima_kps,:no_kps)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nik_ayah', $data['nik_ayah']);
        $this->db->bind('nik_ibu', $data['nik_ibu']);
        $this->db->bind('ttl', $data['ttl']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('jenis_tinggal', $data['jenis_tinggal']);
        $this->db->bind('alat_transportasi', $data['alat_transportasi']);
        $this->db->bind('nomor_telepon', $data['nomor_telepon']);
        $this->db->bind('status_dalam_keluarga', $data['status_dalam_keluarga']);
        $this->db->bind('penerima_kps', $data['penerima_kps']);
        $this->db->bind('no_kps', $data['no_kps']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateSiswa($data)
    {

        $query = "UPDATE tb_siswa s JOIN tb_ayah a ON s.nik_ayah = a.nik_ayah JOIN tb_ibu i ON s.nik_ibu = i.nik_ibu 
        SET
         s.nama=:nama, 
         s.nik =:nik, 
         s.tempat_lahir =:tempat_lahir,
          s.ttl = :ttl, 
          s.jk =:jk, 
          s.agama =:agama,
           s.alamat =:alamat, 
           a.nama_ayah=:nama_ayah , 
           i.nama_ibu =:nama_ibu, 
           s.nomor_telepon = :nomor_telepon
            WHERE s.id_siswa = :id_siswa";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('ttl', $data['ttl']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('nama_ayah', $data['nama_ayah']);
        $this->db->bind('nama_ibu', $data['nama_ibu']);
        $this->db->bind('nomor_telepon', $data['nomor_telepon']);
        $this->db->bind('id_siswa', $data['id_siswa']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapussiswa($data)
    {
        $query = "DELETE tb_siswa, users FROM tb_siswa INNER JOIN users ON tb_siswa.id_siswa = users.kode_siswa WHERE id_siswa = :id_siswa";
        $this->db->query($query);
        $this->db->bind('id_siswa', $data['id_siswa']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariSiswa()
    {
        $key = $_POST['key'];
        $query = "SELECT * FROM tb_siswa WHERE status = 1 AND nama LIKE :key";
        $this->db->query($query);
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}
