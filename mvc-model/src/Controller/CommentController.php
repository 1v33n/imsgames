<?php

namespace App\Controller;

use App\Repository\CommentRepository;
use App\View\View;

/**
 * Siehe Dokumentation im DefaultController.
 */
class CommentController
{
    public function index()
    {
        $commentRepository = new CommentRepository();

        $view = new View('user/index');
        $view->title = 'Benutzer';
        $view->heading = 'Benutzer';
        $view->users = $commentRepository->readAll();
        $view->display();
    }
    public function doCreate()
    {
        if (isset($_POST['send'])) {
            $comment = htmlentities($_POST['comment']) ;
            $game_id = htmlentities($_POST['game_id']) ;
            $user_id = htmlentities($_POST['user_id']) ;

            $commentRepository = new CommentRepository();
            $commentRepository->create($comment, $game_id, $game_id);
        }

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }

    public function delete()
    {
        $commentRepository = new CommentRepository();
        $commentRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }
}
