<?php

class BiodataModel
{

    private $table = 'tb_siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insert($data, $file)
    {
        $foto = $file['foto']['name'];
        $tmpfotos = $file['foto']['tmp_name'];
        $fotobaru = date('dmYHis') . $foto;
        // Set path folder tempat menyimpan fotonya
        $pathfoto = "img/" . $fotobaru;

                if (move_uploaded_file($tmpfotos, $pathfoto)) {
                    $query = "INSERT INTO biodata_siswas
                    (user_id,
                    tempat_lahir,
                    tanggal_lahir,
                    jenis_kelamin,
                    nik,
                    alamat,
                    agama,
                    kelas,
                    alat_transportasi,
                    no_hp,
                    nis,
                    nomor_kps,
                    jenis_tinggal,
                    tanggal_masuk,
                    foto)
                    VALUES(
                    :user_id,
                    :tempat_lahir,
                    :tanggal_lahir,
                    :jenis_kelamin,
                    :nik,
                    :alamat,
                    :agama,
                    :kelas,
                    :alat_transportasi,
                    :no_hp,
                    :nis,
                    :nomor_kps,
                    :jenis_tinggal,
                    :tanggal_masuk,
                    :foto   )";
                    $this->db->query($query);
                    $this->db->bind('user_id', $data['user_id']);
                    $this->db->bind('tempat_lahir', $data['tempat_lahir']);
                    $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
                    $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
                    $this->db->bind('nik', $data['nik']);
                    $this->db->bind('alamat', $data['alamat']);
                    $this->db->bind('agama', $data['agama']);
                    $this->db->bind('kelas', $data['kelas']);
                    $this->db->bind('alat_transportasi', $data['alat_transportasi']);
                    $this->db->bind('no_hp', $data['no_hp']);
                    $this->db->bind('nis', $data['nis']);
                    $this->db->bind('nomor_kps', $data['nomor_kps']);
                    $this->db->bind('jenis_tinggal', $data['jenis_tinggal']);
                    $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
                    $this->db->bind('foto', $fotobaru);
                    $this->db->execute();
                    return $this->db->rowCount();
                } else {
                    var_dump('gagal upload 3');
                }
           
    }

    public function update($data)
    {
        $query = "UPDATE biodata_siswas SET 
                tempat_lahir=:tempat_lahir,
                tanggal_lahir=:tanggal_lahir,
                jenis_kelamin=:jenis_kelamin,
                nik=:nik,
                alamat=:alamat,
                agama=:agama,
                kelas=:kelas,
                alat_transportasi=:alat_transportasi,
                no_hp=:no_hp,
                nis=:nis,
                nomor_kps=:nomor_kps,
                jenis_tinggal=:jenis_tinggal,
                tanggal_masuk=:tanggal_masuk
                WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('alat_transportasi', $data['alat_transportasi']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nomor_kps', $data['nomor_kps']);
        $this->db->bind('jenis_tinggal', $data['jenis_tinggal']);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
           
    }

    public function update_foto($data, $file)
    {

        if ($file) {
            $foto = $file['foto']['name'];
            $tmpfotos = $file['foto']['tmp_name'];
            $fotobaru = date('dmYHis') . $foto;
            // Set path folder tempat menyimpan fotonya
            $pathfoto = "img/" . $fotobaru;
            //hapus
            unlink("img/$_POST[oldImage]");
            if (move_uploaded_file($tmpfotos, $pathfoto)) {
                $query = "UPDATE biodata_siswas 
                SET 
                tempat_lahir=:tempat_lahir,
                tanggal_lahir=:tanggal_lahir,
                jenis_kelamin=:jenis_kelamin,
                nik=:nik,
                alamat=:alamat,
                agama=:agama,
                kelas=:kelas,
                alat_transportasi=:alat_transportasi,
                no_hp=:no_hp,
                nis=:nis,
                nomor_kps=:nomor_kps,
                jenis_tinggal=:jenis_tinggal,
                tanggal_masuk=:tanggal_masuk,
                foto=:foto WHERE id = :id;";
                $this->db->query($query);
                $this->db->bind('tempat_lahir', $data['tempat_lahir']);
                $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
                $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
                $this->db->bind('nik', $data['nik']);
                $this->db->bind('alamat', $data['alamat']);
                $this->db->bind('agama', $data['agama']);
                $this->db->bind('kelas', $data['kelas']);
                $this->db->bind('alat_transportasi', $data['alat_transportasi']);
                $this->db->bind('no_hp', $data['no_hp']);
                $this->db->bind('nis', $data['nis']);
                $this->db->bind('nomor_kps', $data['nomor_kps']);
                $this->db->bind('jenis_tinggal', $data['jenis_tinggal']);
                $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
                $this->db->bind('foto', $fotobaru);
                $this->db->bind('id', $data['id']);
                $this->db->execute();
                return $this->db->rowCount();
            } else {
                var_dump('gagal upload 3');
            }

        }else{
            var_dump('eek');
        }

           
    }

    public function index()
    {
        
        $query = "SELECT biodata_siswas.*, users.nama
        FROM biodata_siswas
        INNER JOIN users ON biodata_siswas.user_id=users.id;";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function cariSiswa()
    {
        $cari = $_POST['cari'];
        $query = "SELECT * FROM biodata_siswas
                    INNER JOIN users ON biodata_siswas.user_id=users.id
                    WHERE  nama LIKE :cari";
        $this->db->query($query);
        $this->db->bind('cari', "%$cari%");
        return $this->db->resultSet();
    }

    public function cariKelas()
    {
        $cari = $_POST['cari'];
        $query = "SELECT * FROM biodata_siswas
                    INNER JOIN users ON biodata_siswas.user_id=users.id
                    WHERE  kelas LIKE :cari";
        $this->db->query($query);
        $this->db->bind('cari', "%$cari%");
        return $this->db->resultSet();
    }

    public function detail($id)
    {
        
        $query = "SELECT biodata_siswas.*, users.username, users.nama
        FROM biodata_siswas
        INNER JOIN users ON biodata_siswas.user_id=users.id WHERE biodata_siswas.id = $id LIMIT 1;";
        $this->db->query($query);
        return $this->db->single();
    }

    public function detail_siswa($id)
    {
        
        $query = "SELECT biodata_siswas.*, users.username, users.nama
        FROM biodata_siswas
        INNER JOIN users ON biodata_siswas.user_id=users.id WHERE biodata_siswas.user_id = $id LIMIT 1;";
        $this->db->query($query);
        return $this->db->single();
    }

    public function delete($data)
    {
        $query = "DELETE FROM biodata_siswas WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        //hapus
        unlink("img/$_POST[oldImage]");

        return $this->db->rowCount();
    }


   
}