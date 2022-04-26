<?php

namespace App\Controller;

use App\View\View;
use App\Service\AuthenticationService;

class SigninController
{
  /**
   * Die index Funktion wird immer aufgerufen, wenn man nicht mehr als
   * /signin schreibt. Ebenfalls wenn man /signin/index schriebt.
   * Es ist da um die Index view anzupassen (titel, heading...)
   */

    public function index()
    {
        if(AuthenticationService::login($_POST['username'], $_POST['password'])){
            header('Location: /default');
        }
        else{
            echo "Login ist fehlgeschlagen";
        }
    }

    public function login(){
        $view = new View('signin/index');

        $view->title = 'Anmelden';
        $view->heading = 'Anmelden';
        $view->msg = htmlentities($_GET['msg'] ?: null);
        $view->display();
    }

    public function logout() {
        AuthenticationService::logout();

        header('Location: /default');
    }
}
