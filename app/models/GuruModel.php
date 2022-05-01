<?php

class GuruModel
{

    private $table = 'gurus';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function index()
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


    public function insert($data, $foto)
    {
        $fotoguru = $foto['foto']['name'];

        $tmpfotosiswa = $foto['foto']['tmp_name'];

        $fotogurubaru = date('dmYHis') . $fotoguru;
        // Set path folder tempat menyimpan fotonya
        $pathfotoguru = "img/" . $fotogurubaru;

        if (move_uploaded_file($tmpfotosiswa, $pathfotoguru)) {
            $query = "INSERT INTO gurus (
                nama_guru,
                nama_lembaga,
                tempat_lahir, 
                tanggal_lahir,
                nik,
                tmt, 
                tahun_kerja,
                bulan_kerja,
                status_guru,
                alamat_lembaga,
                alamat_rumah,
                pendidikan_guru,
                foto)
                
                 VALUES 
                (
                :nama_guru,
                :nama_lembaga,
                :tempat_lahir, 
                :tanggal_lahir,
                :nik,
                :tmt, 
                :tahun_kerja,
                :bulan_kerja,
                :status_guru,
                :alamat_lembaga,
                :alamat_rumah,
                :pendidikan_guru,
                :foto)";

            $this->db->query($query);
            $this->db->bind('nama_guru', $data['nama_guru']);
            $this->db->bind('nama_lembaga', $data['nama_lembaga']);
            $this->db->bind('tempat_lahir', $data['tempat_lahir']);
            $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
            $this->db->bind('nik', $data['nik']);
            $this->db->bind('tmt', $data['tmt']);
            $this->db->bind('tahun_kerja', $data['tahun_kerja']);
            $this->db->bind('bulan_kerja', $data['bulan_kerja']);
            $this->db->bind('status_guru', $data['status_guru']);
            $this->db->bind('alamat_lembaga', $data['alamat_lembaga']);
            $this->db->bind('alamat_rumah', $data['alamat_rumah']);
            $this->db->bind('pendidikan_guru', $data['pendidikan_guru']);
            $this->db->bind('foto', $fotogurubaru);
            $this->db->execute();

            return $this->db->rowCount();
        }
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
        $query = "SELECT * FROM gurus WHERE  nama_guru LIKE :key";
        $this->db->query($query);
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }

    public function delete($data)
    {
        $query = "DELETE FROM gurus WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        $foto=$data['oldImage'];
        // //hapus
        unlink('img/'.$foto);

        return $this->db->rowCount();
    }


    public function update($data)
    {
        $query = "UPDATE gurus SET 
                nama_guru=:nama_guru,
                nama_lembaga=:nama_lembaga,
                tempat_lahir=:tempat_lahir,
                nik=:nik,
                tmt=:tmt,
                tahun_kerja=:tahun_kerja,
                bulan_kerja=:bulan_kerja,
                status_guru=:status_guru,
                alamat_lembaga=:alamat_lembaga,
                alamat_rumah=:alamat_rumah,
                pendidikan_guru=:pendidikan_guru
                WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama_guru', $data['nama_guru']);
        $this->db->bind('nama_lembaga', $data['nama_lembaga']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('tmt', $data['tmt']);
        $this->db->bind('tahun_kerja', $data['tahun_kerja']);
        $this->db->bind('bulan_kerja', $data['bulan_kerja']);
        $this->db->bind('status_guru', $data['status_guru']);
        $this->db->bind('alamat_lembaga', $data['alamat_lembaga']);
        $this->db->bind('alamat_rumah', $data['alamat_rumah']);
        $this->db->bind('pendidikan_guru', $data['pendidikan_guru']);
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
                $query = "UPDATE gurus 
                SET 
                nama_guru=:nama_guru,
                nama_lembaga=:nama_lembaga,
                tempat_lahir=:tempat_lahir,
                nik=:nik,
                tmt=:tmt,
                tahun_kerja=:tahun_kerja,
                bulan_kerja=:bulan_kerja,
                status_guru=:status_guru,
                alamat_lembaga=:alamat_lembaga,
                alamat_rumah=:alamat_rumah,
                pendidikan_guru=:pendidikan_guru,
                foto=:foto WHERE id = :id;";
                $this->db->query($query);
                $this->db->bind('nama_guru', $data['nama_guru']);
                $this->db->bind('nama_lembaga', $data['nama_lembaga']);
                $this->db->bind('tempat_lahir', $data['tempat_lahir']);
                $this->db->bind('nik', $data['nik']);
                $this->db->bind('tmt', $data['tmt']);
                $this->db->bind('tahun_kerja', $data['tahun_kerja']);
                $this->db->bind('bulan_kerja', $data['bulan_kerja']);
                $this->db->bind('status_guru', $data['status_guru']);
                $this->db->bind('alamat_lembaga', $data['alamat_lembaga']);
                $this->db->bind('alamat_rumah', $data['alamat_rumah']);
                $this->db->bind('pendidikan_guru', $data['pendidikan_guru']);
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


}