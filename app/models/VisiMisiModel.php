<?php

class VisiMisiModel
{

    private $table = 'visi_misis';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function index()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->single();

    }

    public function insert($data)
    {
        $query = "INSERT INTO visi_misis (misi,visi)
         VALUES(:misi,:visi)";
        $this->db->query($query);
        $this->db->bind('misi', $data['misi']);
        $this->db->bind('visi', $data['visi']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE visi_misis  
        SET
        misi = :misi, 
        visi =:visi";

        $this->db->query($query);
        $this->db->bind('misi', $data['misi']);
        $this->db->bind('visi', $data['visi']);
        $this->db->execute();

        return $this->db->rowCount();
    }

   
}