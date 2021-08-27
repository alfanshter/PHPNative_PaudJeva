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
}
