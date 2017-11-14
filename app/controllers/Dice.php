<?php

class Dice extends Controller {

    public function index() {

        header ("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getAllGames();

        echo json_encode($result);

    }

    public function myGames() {

        header ("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getUserGames($_SESSION['username']);

        echo json_encode($result);

    }

    public function topWinners() {

        header ("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getTopWinners(1);

        echo json_encode($result);

    }

    public function topPlayers() {

        header ("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getTopPlayers(1);

        echo json_encode($result);

    }

    public function visi() {
    	header ("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getAllGames();

        echo json_encode($result);
    }

    public function insertGames() {
        if (isset($_SESSION['logged'])) {
         $aidy = $_POST['sukimas'];
         $rezas = $_POST['rezultatas'];

         $game = $this->model('Game');
         $result = $game->insertGame($aidy, $rezas);
     }
 }

}