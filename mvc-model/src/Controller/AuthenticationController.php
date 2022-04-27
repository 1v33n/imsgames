<?php

namespace App\Controller;

use App\View\View;

class AuthenticationController
{
    public function index() {

    }

    public function login() {
        $view = new View('/authentication/login');
        $view->title = 'Login';
        $view->heading = 'Login';
        $view->display();
    }

    public function logout() {

    }
}