<?php

namespace App\Controller;

use App\Repository\CommentRepository;
use App\Service\AuthenticationService;
use App\View\View;

/**
 * Siehe Dokumentation im DefaultController.
 */
class CommentController
{
    public function create()
    {
            $comment = htmlentities($_POST['comment']) ;
            $game_id = htmlentities($_GET['id']) ;
            $user_id = htmlentities(AuthenticationService::getAuthenticatedUser()->id);

            $commentRepository = new CommentRepository();
            $commentRepository->create($comment, $game_id, $user_id);
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
