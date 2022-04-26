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
            header('Location: /signin/login');
        }
    }
    
    public function signup(){
        $view = new View('signup/index');

        $view->title = 'Registrieren';
        $view->heading = 'Registrieren';
        $view->display();
    }


    public function create()
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
