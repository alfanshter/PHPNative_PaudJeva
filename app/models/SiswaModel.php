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

    public function getsiswa()
    {
        $query = "SELECT * FROM users WHERE role = 1";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getSiswaPendaftaran()
    {
        $query = "SELECT * FROM tb_siswa ";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getdatasiswa($id)
    {
        $query = "SELECT * FROM tb_siswa s JOIN tb_ayah a ON s.nik_ayah=a.nik_ayah JOIN tb_ibu i ON s.nik_ibu=i.nik_ibu WHERE s.id = $id";
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
                    $query = "INSERT INTO tb_siswa (nama,username,nik_ayah,nik_ibu,ttl,tempat_lahir,jk,nik,alamat,agama,jenis_tinggal,alat_transportasi,nomor_telepon,status_dalam_keluarga,penerima_kps,no_kps,foto,foto_kk,foto_akte)
                    VALUES(:nama,:username,:nik_ayah,:nik_ibu,:ttl,:tempat_lahir,:jk,:nik,:alamat,:agama,:jenis_tinggal,:alat_transportasi,:nomor_telepon,:status_dalam_keluarga,:penerima_kps,:no_kps,:foto,:foto_kk,:foto_akte)";
                    $this->db->query($query);
                    $this->db->bind('nama', $data['nama']);
                    $this->db->bind('username', $data['username']);
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

    public function insertSiswa($data)
    {
        $query = "INSERT INTO users (username, password,role) 
        VALUES (:username,:password,1);";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($id)
    {
        $query = "DELETE FROM users WHERE id = $id";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE users SET password=:password 
        where id =:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function updateSiswa($data)
    {

        $query = "UPDATE tb_siswa s JOIN tb_ayah a ON s.nik_ayah = a.nik_ayah JOIN tb_ibu i ON s.nik_ibu = i.nik_ibu 
            SET
             s.nama=:nama, 
             s.username=:username,
             s.nik =:nik, 
             s.tempat_lahir =:tempat_lahir,
              s.ttl = :ttl, 
              s.jk =:jk, 
              s.agama =:agama,
               s.alamat =:alamat, 
               a.nama_ayah=:nama_ayah , 
               i.nama_ibu =:nama_ibu, 
               s.nomor_telepon = :nomor_telepon,
               s.jenis_tinggal = :jenis_tinggal,
               s.alat_transportasi = :alat_transportasi
                WHERE s.id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('ttl', $data['ttl']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('nama_ayah', $data['nama_ayah']);
        $this->db->bind('nama_ibu', $data['nama_ibu']);
        $this->db->bind('nomor_telepon', $data['nomor_telepon']);
        $this->db->bind('id', $data['id']);
        $this->db->bind('jenis_tinggal', $data['jenis_tinggal']);
        $this->db->bind('alat_transportasi', $data['alat_transportasi']);
        $this->db->execute();

        return $this->db->rowCount();

        // if ($_FILES['btn_editfoto']['name'] == null && $_FILES['btn_editkk']['name'] == null && $_FILES['btn_editakte']['name'] == null) {
        //     var_dump('alfan');
        //     prosesupdate($data);
        // }
        // // $fotosiswa = $foto['edit_foto']['name'];

        // // $tmpfotosiswa = $foto['edit_foto']['tmp_name'];

        // // $fotosiswabaru = date('dmYHis') . $fotosiswa;
        // // // Set path folder tempat menyimpan fotonya
        // // $pathfotosiswa = "img/" . $fotosiswabaru;


        // // if (move_uploaded_file($tmpfotosiswa, $pathfotosiswa)) {
        // // }
    }

    public function hapussiswa($data)
    {
        $query = "DELETE tb_siswa, users FROM tb_siswa INNER JOIN users ON tb_siswa.nik = users.kode_siswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariSiswa()
    {
        $cari = $_POST['cari'];
        $query = "SELECT * FROM users WHERE role = 1 AND nama LIKE :cari";
        $this->db->query($query);
        $this->db->bind('cari', "%$cari%");
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
        $query = "DELETE tb_siswa FROM tb_siswa  WHERE id = :id AND status = 0";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function aktifasiSiswa($data)
    {
        $query = "UPDATE tb_siswa s JOIN tb_ayah a ON s.nik_ayah = a.nik_ayah JOIN tb_ibu i ON s.nik_ibu = i.nik_ibu 
        SET
         s.nama=:nama,
         s.username=:username,
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
            WHERE s.id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('ttl', $data['ttl']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('nama_ayah', $data['nama_ayah']);
        $this->db->bind('nama_ibu', $data['nama_ibu']);
        $this->db->bind('nomor_telepon', $data['nomor_telepon']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function registerAkun($data)
    {
        $username = $data['username'];
        $nik = $data['nik'];
        $query = "INSERT INTO users (username,role,kode_siswa)
        VALUES('$username',10,$nik)";
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

    public function checkusername($data)
    {
        $query = "SELECT * FROM tb_siswa WHERE username = '$data'";
        $this->db->query($query);
        return $this->db->single();
    }

    public function checknik($data)
    {
        $query = "SELECT * FROM tb_siswa WHERE nik = '$data'";
        $this->db->query($query);
        return $this->db->single();
    }

    public function editfoto($foto)
    {
        $fotosiswa = $foto['edit_foto']['name'];

        $tmpfotosiswa = $foto['edit_foto']['tmp_name'];

        $fotosiswabaru = date('dmYHis') . $fotosiswa;
        // Set path folder tempat menyimpan fotonya
        $pathfotosiswa = "img/" . $fotosiswabaru;


        if (move_uploaded_file($tmpfotosiswa, $pathfotosiswa)) {

            $query = "UPDATE tb_siswa  
                SET
                 foto= :foto
            WHERE nik = :kode_siswa";
            $this->db->query($query);
            $this->db->bind('kode_siswa', $_SESSION['id']);
            $this->db->bind('foto', $fotosiswabaru);
            $this->db->execute();

            return $this->db->rowCount();
        }
    }

    public function editFotoSiswaAdmin($data, $file)
    {

        $fotosiswa = $file['btn_editfoto']['name'];

        $tmpfotosiswa = $file['btn_editfoto']['tmp_name'];

        $fotosiswabaru = date('dmYHis') . $fotosiswa;
        // Set path folder tempat menyimpan fotonya
        $pathfotosiswa = "img/" . $fotosiswabaru;
        $nik = $data['nik'];
        if (move_uploaded_file($tmpfotosiswa, $pathfotosiswa)) {

            $query = "UPDATE tb_siswa  
                SET
                 foto= :foto
            WHERE nik = :nik";
            $this->db->query($query);
            $this->db->bind('nik', "$nik");
            $this->db->bind('foto', $fotosiswabaru);
            $this->db->execute();

            return $this->db->rowCount();
        } else {
            var_dump('gagal');
        }
    }

    public function editKKSiswaAdmin($data, $file)
    {

        $fotosiswa = $file['btn_editfoto']['name'];

        $tmpfotosiswa = $file['btn_editfoto']['tmp_name'];

        $fotosiswabaru = date('dmYHis') . $fotosiswa;
        // Set path folder tempat menyimpan fotonya
        $pathfotosiswa = "img/" . $fotosiswabaru;
        var_dump($fotosiswa);
        $nik = $data['nik'];
        if (move_uploaded_file($tmpfotosiswa, $pathfotosiswa)) {

            $query = "UPDATE tb_siswa  
                SET
                 foto_kk= :foto_kk
            WHERE nik = :nik";
            $this->db->query($query);
            $this->db->bind('nik', "$nik");
            $this->db->bind('foto_kk', $fotosiswabaru);
            $this->db->execute();

            return $this->db->rowCount();
        } else {
            var_dump('gagal');
        }
    }

    public function editAkteSiswaAdmin($data, $file)
    {

        $fotosiswa = $file['btn_editfoto']['name'];

        $tmpfotosiswa = $file['btn_editfoto']['tmp_name'];

        $fotosiswabaru = date('dmYHis') . $fotosiswa;
        // Set path folder tempat menyimpan fotonya
        $pathfotosiswa = "img/" . $fotosiswabaru;
        var_dump($fotosiswa);
        $nik = $data['nik'];
        if (move_uploaded_file($tmpfotosiswa, $pathfotosiswa)) {

            $query = "UPDATE tb_siswa  
                SET
                 foto_akte= :foto_akte
            WHERE nik = :nik";
            $this->db->query($query);
            $this->db->bind('nik', "$nik");
            $this->db->bind('foto_akte', $fotosiswabaru);
            $this->db->execute();

            return $this->db->rowCount();
        } else {
            var_dump('gagal');
        }
    }

    public function GetAllStatusSiswa()
    {
        $query = "SELECT * FROM tb_siswa s JOIN users u ON s.nik = u.kode_siswa WHERE status = 2 ORDER BY role DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }
}