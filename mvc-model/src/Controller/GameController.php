<?php

namespace App\Controller;

use App\Repository\GameRepository;
use App\View\View;

/**
 * Siehe Dokumentation im DefaultController.
 */
class GameController
{
    public function index()
    {
        $view = new View('game/index');
        $view->title = 'Games';
        $view->heading = 'Games';
        // to display all games
        $gameRepository = new GameRepository();
        $view->games = $gameRepository->readAll();

        $view->display();
    }

    public function create() {

    }

    // to send data by email
    public function sendRequest() {
    }

    // view to allow user sending us a request of their game
    public function request() {
        $view = new View('game/request');
        $view->title = 'Request';
        $view->heading = 'Request';
        $view->display();
    }

    public function selected() {
        $view = new View('game/selected');

        // to get game with url id
        $gameRepository = new GameRepository();
        $game = $gameRepository->readById($_GET['id']);
        $view->game = $game;
        $view->title = $game->name;
        $view->heading = $game->name;
        $view->display();
    }

    public function delete()
    {
        $gameRepository = new GameRepository();
        $gameRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }
}
