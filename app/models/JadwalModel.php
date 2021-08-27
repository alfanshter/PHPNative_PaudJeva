<?php

class UsersModel
{

    private $table = 'tb_jadwal';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertJadwal()
    {
    }
}
