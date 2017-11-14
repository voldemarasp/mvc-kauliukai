<?php

class Login_model implements GameInterface {

    private $db;

    function __construct(Database $db){
        $this->db = $db;
    }

    public function checkLogin(string $username)
    {
        return $this->db->select("SELECT * FROM vartotojai WHERE vardas = :username", ["username" => $username]);
    }

    public function register(string $username, string $password)
    {
        return $this->db->insert("INSERT INTO vartotojai (vardas, slaptazodis) VALUES (:vardas, :slaptazodis)", ["vardas" => $username, "slaptazodis" => $password]);
    }
}