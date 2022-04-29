<?php

namespace App\Controller;

use App\Repository\RequestRepository;
use App\View\View;

/**
 * Siehe Dokumentation im DefaultController.
 */
class RequestController
{
    public function create()
    {
        if (isset($_POST['send'])) {
            $email = htmlentities($_POST['email']);
            $link = htmlentities($_POST['link']);

            $requestRepository = new RequestRepository();
            $requestRepository->create($email, $link);
        }
        // Anfrage an die URI /user weiterleiten (HTTP 302)
         header('Location: /game/request');
    }

    public function delete()
    {
        $requestRepository = new RequestRepository();
        $requestRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /request');
    }
}
