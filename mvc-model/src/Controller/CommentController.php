<?php

namespace App\Controller;

use App\Repository\CommentRepository;
use App\View\View;

/**
 * Siehe Dokumentation im DefaultController.
 */
class CommentController
{
    public function create()
    {
        if (isset($_POST['send'])) {
            $comment = htmlentities($_POST['comment']) ;
            $game_id = htmlentities($_POST['game_id']) ;
            $user_id = htmlentities($_SESSION['id']);
            
            $commentRepository = new CommentRepository();
            $commentRepository->create($comment, $game_id, $user_id);
        }
        // Anfrage an die URI /user weiterleiten (HTTP 302)
         header('Location: /game/selected?id='. $_GET['id']);
    }

    public function delete()
    {
        $commentRepository = new CommentRepository();
        $commentRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }
}
