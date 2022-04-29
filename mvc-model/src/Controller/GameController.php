<?php

namespace App\Controller;

use App\Repository\GameRepository;
use App\View\View;
use App\Service\AuthenticationService;

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
        $view->isLoggedIn = !isset($_SESSION['id']);
        // to display all games
        $gameRepository = new GameRepository();
        $view->games = $gameRepository->readAll();

        $view->display();
    }
    // to send data by email
    public function sendRequest() {

        header('Location: /game/request');
    }

    // view to allow user sending us a request of their game
    public function request() {
        $view = new View('game/request');
        $view->title = 'Request';
        $view->heading = 'Request';
        $view->isLoggedIn = AuthenticationService::isAuthenticated();
        $view->display();
    }

    public function selected() {
        $view = new View('game/selected');
        $view->isLoggedIn = !isset($_SESSION['id']);
        // to get game with url id
        $gameRepository = new GameRepository();
        $game = $gameRepository->readById($_GET['id']);
        $view->game = $game;
        $view->title = $game->name;
        $view->heading = $game->name;
        $view->display();
    }
}
