<?php

class Stats extends Controller {

    public function index() {

        $data['title'] = "CA Dice Game";
        $data['header'] = "My stats";
        $data['body'] = "This is the best game!";

        $game = $this->model('Game');
        $data['my_stats'] = $game->getUserGames('kak');

        $this->view("stats\index", $data);
    }

    public function top() {

        $data['title'] = "CA Dice Game";
        $data['header'] = "User List";
        $data['body'] = "Here we have a list of our players";

        $game = $this->model('Game');
        $data['my_stats'] = $game->getTopWinners(2);

        $this->view("stats/stop", $data);
    }

}