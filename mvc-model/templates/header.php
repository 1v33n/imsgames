<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <title><?= $title; ?> | imsgames</title>
</head>
<body>

<header class="header">
    <nav class="nav">
        <a class="nav-brand" href="/">imsgames</a>

        <ul class="nav-list">
            <li class="nav-item">
                <a class="nav-link" href="/game">Games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/game/request">Requests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/authentication/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/user/signup">Sign up</a>
            </li>
            
        </ul>

        <button class="nav-button" type="button" onclick="toggleNavMenu(event)">
            <i class='bx bxs-grid-alt'></i>
        </button>
    </nav>
</header>

<main class="container">
    <div class="wrapper">
