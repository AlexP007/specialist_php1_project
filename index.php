<?php

include 'lib/data.php';

$fullName = "{$me['name']} {$me['surname']}";

$page = 'main';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}

switch ($page) {
    case 'main':
        $page = 'main.php';
        break;
    case 'resume':
        $page = 'resume.php';
        break;
    case 'portfolio':
        $page = 'portfolio.php';
        break;
    case 'blog':
        $page = 'blog.php';
        break;
    case 'contacts':
        $page = 'contacts.php';
        break;
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Резюме - <?= $fullName ?></title>
    <!-- CSS -->
    <link href="assets/style.css" rel="stylesheet">
    <!-- Load Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,100,300italic,300,100italic,400italic,500,500italic,700,700italic&amp;subset=latin,cyrillic' rel='stylesheet'>
</head>
<body>
<!-- Container -->
<div class="container roboto bcg-orange">
    <!-- Wrapper -->
    <div class="wrapper bcg-white">

        <header>
            <div class="head">
                <nav>
                    <ul>
                        <li><a href="/?p=resume" class="lnk">Резюме</a></li>
                        <li><a href="/?p=portfolio" class="lnk">Портфолио</a></li>
                        <li><a href="/?p=blog" class="lnk">Блог</a></li>
                        <li><a href="/?p=contacts" class="lnk">Контанты</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <div class="main__center">
               <?php include "pages/$page"?>
            </div>
        </main>

        <footer>
            <small>© <?= date('Y') ?> <?= $fullName ?></small>
        </footer>
    </div>
    <!-- end Wrapper -->
</div>
<!-- end Container -->
</body>
</html>