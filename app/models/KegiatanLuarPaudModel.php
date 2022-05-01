<?php

class KegiatanLuarPaudModel
{

    private $table = 'kegiatan_luar_pauds';
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

    public function cariKegiatanLuarPaud()
    {
        $key = $_POST['key'];
        $query = "SELECT * FROM kegiatan_luar_pauds WHERE nama_kegiatan LIKE :key";
        $this->db->query($query);
        $this->db->bind('key', "%$key%");
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
        $fotokegiatan = $foto['foto_kegiatan']['name'];

        $tmpfotosiswa = $foto['foto_kegiatan']['tmp_name'];

        $fotokegiatanbaru = date('dmYHis') . $fotokegiatan;
        // Set path folder tempat menyimpan fotonya
        $pathfotokegiatan = "img/" . $fotokegiatanbaru;

        if (move_uploaded_file($tmpfotosiswa, $pathfotokegiatan)) {
            $query = "INSERT INTO kegiatan_luar_pauds (
                nama_kegiatan,
                cerita_kegiatan,
                foto_kegiatan)
                
                 VALUES 
                (
                :nama_kegiatan,
                :cerita_kegiatan,
                :foto_kegiatan)";

            $this->db->query($query);
            $this->db->bind('nama_kegiatan', $data['nama_kegiatan']);
            $this->db->bind('cerita_kegiatan', $data['cerita_kegiatan']);
            $this->db->bind('foto_kegiatan', $fotokegiatanbaru);
            $this->db->execute();

            return $this->db->rowCount();
        }
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
        $query = "UPDATE kegiatan_luar_pauds SET 
                nama_kegiatan=:nama_kegiatan,
                cerita_kegiatan=:cerita_kegiatan
                WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama_kegiatan', $data['nama_kegiatan']);
        $this->db->bind('cerita_kegiatan', $data['cerita_kegiatan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
           
    }

    public function update_foto($data, $file)
    {

        if ($file) {
            $foto = $file['foto_kegiatan']['name'];
            $tmpfotos = $file['foto_kegiatan']['tmp_name'];
            $fotobaru = date('dmYHis') . $foto;
            // Set path folder tempat menyimpan fotonya
            $pathfoto = "img/" . $fotobaru;
            //hapus
            unlink("img/$_POST[oldImage]");
            if (move_uploaded_file($tmpfotos, $pathfoto)) {
                $query = "UPDATE kegiatan_luar_pauds 
                SET 
                nama_kegiatan=:nama_kegiatan,
                cerita_kegiatan=:cerita_kegiatan,
                foto_kegiatan=:foto_kegiatan WHERE id = :id;";
                $this->db->query($query);
                $this->db->bind('nama_kegiatan', $data['nama_kegiatan']);
                $this->db->bind('cerita_kegiatan', $data['cerita_kegiatan']);
                $this->db->bind('foto_kegiatan',  $fotobaru);
                $this->db->bind('id', $data['id']);
                $this->db->execute();
                return $this->db->rowCount();
            } else {
                var_dump('gagal upload 3');
            }

        }else{
            var_dump('gagal');
        }

           
    }


}