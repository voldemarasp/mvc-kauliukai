<?php

class Game implements GameInterface {

    private $db;

    function __construct(Database $db){
        $this->db = $db;
    }

    public function getAllGames(): array
    {
         return $this->db->select("SELECT * FROM zaidimai");
    }

    public function getUserGames(string $username): array
    {
       return $this->db->select("SELECT * FROM zaidimai WHERE vartotojas = :username", ["username" => $username]);
    }

    public function getTopWinners(int $count): array
    {
        $count = intval($count);
        return $this->db->select("SELECT MAX(rezultatas) AS rezultatai, vartotojas FROM zaidimai GROUP BY vartotojas LIMIT {$count}");
    }

    public function getTopPlayers(int $count): array
    {
        $count = intval($count);
        return $this->db->select("SELECT COUNT(vartotojas) AS geriausi, vartotojas FROM zaidimai GROUP BY vartotojas ORDER BY geriausi DESC LIMIT $count");
    }

    public function insertGame(int $sukimas, string $rezultatas) {
        // $sukimas = intval($sukimas);
        // $rezultatas = intval($rezultatas);

        return $this->db->insert("INSERT INTO zaidimai (sukimas, rezultatas, vartotojas, data) VALUES (:sukimas, :rezultatas, :vartotojas, :data)", ["sukimas" => $sukimas, "rezultatas" => $rezultatas, "vartotojas" => $_SESSION['username'], "data" => date("Y-m-d")]);
    }
}