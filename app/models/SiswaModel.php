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

    public function getSiswaPendaftaran()
    {
        $query = "SELECT * FROM tb_siswa WHERE status = 0";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getdatasiswa($id_siswa)
    {
        $query = "SELECT * FROM tb_siswa s JOIN tb_ayah a ON s.nik_ayah=a.nik_ayah JOIN tb_ibu i ON s.nik_ibu=i.nik_ibu WHERE s.id_siswa = $id_siswa";
        $this->db->query($query);
        return $this->db->single();
    }

    public function getbiodata($nik_siswa)
    {
        $query = "SELECT * FROM tb_siswa s JOIN tb_ayah a ON s.nik_ayah=a.nik_ayah JOIN tb_ibu i ON s.nik_ibu=i.nik_ibu WHERE s.nik = $nik_siswa";
        $this->db->query($query);
        return $this->db->single();
    }

    public function tambahSiswa($data, $foto)
    {
        $fotosiswa = $foto['foto']['name'];
        $fotokk = $foto['foto_kk']['name'];
        $fotoakte = $foto['foto_akte']['name'];

        $tmpfotosiswa = $foto['foto']['tmp_name'];
        $tmpfotokk = $foto['foto_kk']['tmp_name'];
        $tmpfotoakte = $foto['foto_akte']['tmp_name'];

        $fotosiswabaru = date('dmYHis') . $fotosiswa;
        $fotokkbaru = date('dmYHis') . $fotokk;
        $fotoaktebaru = date('dmYHis') . $fotoakte;
        // Set path folder tempat menyimpan fotonya
        $pathfotosiswa = "img/" . $fotosiswabaru;
        $pathfotokk = "img/" . $fotokkbaru;
        $pathfotoakte = "img/" . $fotoaktebaru;

        if (move_uploaded_file($tmpfotosiswa, $pathfotosiswa)) {
            if (move_uploaded_file($tmpfotokk, $pathfotokk)) {
                if (move_uploaded_file($tmpfotoakte, $pathfotoakte)) {
                    $query = "INSERT INTO tb_siswa (nama,nik_ayah,nik_ibu,ttl,tempat_lahir,jk,nik,alamat,agama,jenis_tinggal,alat_transportasi,nomor_telepon,status_dalam_keluarga,penerima_kps,no_kps,foto,foto_kk,foto_akte)
                    VALUES(:nama,:nik_ayah,:nik_ibu,:ttl,:tempat_lahir,:jk,:nik,:alamat,:agama,:jenis_tinggal,:alat_transportasi,:nomor_telepon,:status_dalam_keluarga,:penerima_kps,:no_kps,:foto,:foto_kk,:foto_akte)";
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
                    $this->db->bind('foto', $fotosiswabaru);
                    $this->db->bind('foto_kk', $fotokkbaru);
                    $this->db->bind('foto_akte', $fotoaktebaru);
                    $this->db->execute();
                    return $this->db->rowCount();
                } else {
                    var_dump('gagal upload 3');
                }
            } else {
                var_dump('gagal upload 2');
            }
        } else {
            var_dump('gagal upload 1');
        }
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
        $query = "DELETE tb_siswa, users FROM tb_siswa INNER JOIN users ON tb_siswa.nik = users.kode_siswa WHERE id_siswa = :id_siswa";
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

    public function cariSiswadaftar()
    {
        $key = $_POST['key'];
        $query = "SELECT * FROM tb_siswa WHERE status = 0 AND nama LIKE :key";
        $this->db->query($query);
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }

    public function hapussiswaDaftar($data)
    {
        $query = "DELETE tb_siswa FROM tb_siswa  WHERE id_siswa = :id_siswa AND status = 0";
        $this->db->query($query);
        $this->db->bind('id_siswa', $data['id_siswa']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function aktifasiSiswa($data)
    {
        $query = "UPDATE tb_siswa s JOIN tb_ayah a ON s.nik_ayah = a.nik_ayah JOIN tb_ibu i ON s.nik_ibu = i.nik_ibu 
        SET
         s.nama=:nama,
         s.status = 2, 
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

    public function registerAkun($data)
    {
        $nik = $data['nik'];

        $query = "INSERT INTO users (username,role,kode_siswa)
        VALUES($nik,10,$nik)";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function setstatus($data)
    {
        $query = "UPDATE tb_siswa  
        SET
         status=1 
            WHERE nik = :username AND status = 2";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
