<?php

namespace App\Service;

use App\Database\ConnectionHandler;
use App\Repository\UserRepository;
use RuntimeException;

class AuthenticationService
{
    public static function login($username, $password)
    {
        // Den Benutzer anhand des usernames auslesen
        $userRepository = new UserRepository();

        // to prevent sql injections
        $username = ConnectionHandler::escape($username);
        $password = ConnectionHandler::escape($password);

        $user = $userRepository->readByName($username);

        if ($user != null)
        {
			// TODO: Mitgegebenes Passwort hashen
            $password_hash = hash('sha256', $password);

            // Prüfen ob der Password-Hash dem aus der Datenbank entspricht
            if ($password_hash == $user->password)
            {
                // Login successful
                // TODO: User-ID in die Session schreiben
                session_start();
                $_SESSION['id'] = $user->id;

                $authenticationMessage = 'Erfolgreich eingeloggt';
                return [true, $authenticationMessage];
            } else {
                $authenticationMessage = 'Passwort stimmt nicht';
            }
        } else {
            $authenticationMessage = 'Benutzername nicht gefunden';
        }

        return [false, $authenticationMessage];
    }

    public static function logout()
    {
        session_start();

        // TODO: Mit unset die Session-Werte löschen
        unset($_SESSION['id']);

        // TODO: Session zerstören
        session_destroy();
    }

    public static function isAuthenticated()
    {
      session_start();
      // TODO: Zurückgeben ob eine ID in der Session gespeichert wurde (true/false)
      return isset($_SESSION['id']);
    }

    public static function getAuthenticatedUser()
    {
        session_start();
        $userRepository = new UserRepository();

		// TODO: User anhand der ID aus der Session auslesen
        $user = $userRepository->readById($_SESSION['id']);
		// TODO: User zurückgeben
        return $user;
    }

    public static function restrictAuthenticated() {
        if (!self::isAuthenticated()) {
            throw new RuntimeException("Sie haben keine Berechtigung diese Seite anzuzeigen.");
            // Unbefungte Zugriffsversuche sollten immer geloggt werden
			// z.B. mit error_log()
            exit();
        }
    }

    public static function requireLogin() {
        if(!self::isAuthenticated()) {
            header('Location: /signin/login?msg=' . urlencode("Du musst dich einloggen, um einen Kommentar schreiben zu können!"));
            exit();
        }
    }
}
