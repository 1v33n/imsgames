<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\View\View;
use App\Service\AuthenticationService;


/**
 * Siehe Dokumentation im DefaultController.
 */
class UserController
{
    public function index()
    {
        if(AuthenticationService::isAuthenticated()){
            $userRepository = new UserRepository();

            $view = new View('user/index');

            $view->isLoggedIn = isset($_SESSION['id']);

            $view->title = 'Benutzer';
            $view->heading = 'Benutzer';
            $view->users = $userRepository->readById($_SESSION['id']);
            $view->display();
        }
        else{
            header('Location: /signin');
        }
    }
    
    public function create()
    {
        $view = new View('user/create');
        $view->title = 'Registrieren';
        $view->heading = 'Registrieren';
        $view->display();

    }

    public function signup(){
        $view = new View('user/create');

        $view->title = 'Registrieren';
        $view->heading = 'Registrieren';
        $view->display();
    }

    public function doCreate()
    {
        if (isset($_POST['send'])) {
            $username = htmlentities($_POST['username']);
            $password = htmlentities($_POST['password']) ;

            $userRepository = new UserRepository();
            $userRepository->create($username, $password);
            if(AuthenticationService::login($username, $password)){
                header('Location: /default');
            }
            else{
                echo "Sign up fehlgeschlagen";
            }
        }
        //header('Location: /default');
    }


    public function delete()
    {
        AuthenticationService::restrictAuthenticated();

        $userRepository = new UserRepository();
        $userRepository->deleteById(htmlentities($_GET['id']));

        AuthenticationService::logout();

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /default');
    }
}
