<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!-- JS -->
    <script src="/js/validator.js"></script>
    <script src="/js/toggler.js"></script>

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
            <?php if (!$this->isLoggedIn): ?>
                <li class="nav-item">
                    <a class="nav-link nav-authentication" href="/authentication">Login</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link nav-authentication" href="/authentication/logout">Logout</a>
                </li>
            <?php endif; ?>
        </ul>

        <button class="nav-button" type="button" onclick="toggleNavMenu(event)">
            <i class='bx bxs-grid-alt'></i>
        </button>
    </nav>
</header>

<main class="container">
    <div class="wrapper">
