<?php

class UsersModel
{

    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function checklogin($data)
    {
        $query = "SELECT * FROM users where username = :username AND password = :password";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        return $this->db->single();
    }

    public function getAdmin()
    {
        $query = "SELECT * FROM users u join tb_admin a on u.kode_admin = a.id_admin where role = 1";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function setPassword($data)
    {
        $query = "UPDATE users  
        SET
         password=:password,
         role = 2
            WHERE username = :username";
        $this->db->query($query);
        $this->db->bind('password', $data['password']);
        $this->db->bind('username', $data['username']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
