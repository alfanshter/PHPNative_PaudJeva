<?php

class FasilitasModel
{

    private $table = 'fasilitas';
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


    public function insert($data, $foto)
    {
        $fotofasilitas = $foto['foto']['name'];
        $tmpfotofasilitas = $foto['foto']['tmp_name'];
        $fotofasilitasbaru = date('dmYHis') . $fotofasilitas;
        $pathfotofasilitas = "img/" . $fotofasilitasbaru;

        if (move_uploaded_file($tmpfotofasilitas, $pathfotofasilitas)) {

            $query = "INSERT INTO fasilitas (nama,foto)
        VALUES(:nama,:foto)";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('foto', $fotofasilitasbaru);
            $this->db->execute();
        }

        return $this->db->rowCount();
    }



    public function delete($data)
    {
        $query = "DELETE fasilitas FROM fasilitas  WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE fasilitas SET 
                nama=:nama
                WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
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
                $query = "UPDATE fasilitas 
                SET 
                nama=:nama,
                foto=:foto 
                WHERE id = :id;";
                $this->db->query($query);
                $this->db->bind('nama', $data['nama']);
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