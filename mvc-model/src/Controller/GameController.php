<?php

namespace App\Controller;

use App\Repository\GameRepository;
use App\View\View;

/**
 * Siehe Dokumentation im DefaultController.
 */
class UserController
{
    public function index()
    {
        $gameRepository = new GameRepository();

        $view = new View('user/index');
        $view->title = 'Benutzer';
        $view->heading = 'Benutzer';
        $view->users = $gameRepository->readAll();
        $view->display();
    }

    public function create()
    {
        $view = new View('user/create');
        $view->title = 'Benutzer erstellen';
        $view->heading = 'Benutzer erstellen';
        $view->display();
    }

    public function doCreate()
    {
        if (isset($_POST['send'])) {
            $name = htmlentities($_POST['name']);
            $dir = htmlentities($_POST['dir']) ;

            $gameRepository = new GameRepository();
            $gameRepository->create($name, $dir);
        }

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }

    public function delete()
    {
        $gameRepository = new GameRepository();
        $gameRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }
}
