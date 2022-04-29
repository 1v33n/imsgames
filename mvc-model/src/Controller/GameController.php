<?php

namespace App\Controller;

use App\Repository\GameRepository;
use App\View\View;
use App\Service\AuthenticationService;

/**
 * Siehe Dokumentation im DefaultController.
 */
class GameController
{
    public function index()
    {
        $view = new View('game/index');
        $view->title = 'Games';
        $view->heading = 'Games';
        $view->isLoggedIn = AuthenticationService::isAuthenticated();
        // to display all games
        $view->isLoggedIn = isset($_SESSION['id']);
        $gameRepository = new GameRepository();
        $view->games = $gameRepository->readAll();

        $view->display();
    }
    // to send data by email
    // public function sendRequest() {
    //     if(isset($_POST['send'])){
    //         $to = "nathaliekrieg41@gmail.com"; // this is your Email address
    //         $from = $_POST['email']; // this is the sender's Email address
    //         $fname = $_POST['fname'];
    //         $lname = $_POST['lname'];
    //         $subject = "Form submission";
            
    //         $message = $fname . " " . $lname . " wrote the following:" . "\n\n" . $_POST['textarea'];
            
        
    //         $headers = "From:" . $from;
    //         mail($to,$subject,$message,$headers);
            
    //         echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";
    //         // You can also use header('Location: thank_you.php'); to redirect to another page.
    //         }
    //     //header('Location: /game/request');
    // }

    // view to allow user sending us a request of their game
    public function request() {
        $view = new View('game/request');
        $view->title = 'Request';
        $view->heading = 'Request';
        $view->isLoggedIn = AuthenticationService::isAuthenticated();
        $view->display();
    }

    public function selected() {
        $view = new View('game/selected');
        $view->isLoggedIn = AuthenticationService::isAuthenticated();
        $view->userId = AuthenticationService::getAuthenticatedUser()->id;
        // to get game with url id
        $gameRepository = new GameRepository();
        $game = $gameRepository->readById($_GET['id']);
        $view->game = $game;
        $view->title = $game->name;
        $view->heading = $game->name;
        $view->display();
    }

    public function delete()
    {
        $gameRepository = new GameRepository();
        $gameRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }
}
