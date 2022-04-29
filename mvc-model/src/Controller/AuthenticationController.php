<?php

namespace App\Controller;

use App\Service\AuthenticationService;
use App\View\View;

class AuthenticationController
{
    public function index() {
        $view = new View('/authentication/login');
        $view->title = 'Login';
        $view->heading = 'Login';
        $view->display();
    }

    public function login() {
        // to prevent XSS
        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);

        $loginResult = AuthenticationService::login($username, $password);
        if ($loginResult[0]) {
            $view = new View("default/index");
            $view->title = "Startseite";
            $view->heading = "Startseite";
            $view->isLoggedIn = true;
            $view->authenticationSuccess = $loginResult[1];
            $view->display();
        } else {
            $view = new View('/authentication/login');
            $view->title = 'Login';
            $view->heading = 'Login';
            $view->error = $loginResult[1];
            $view->display();
        }
    }

    public function logout() {
        AuthenticationService::logout();
        header('Location: /default');
    }
}