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
    case 'contacts':
        $page = 'contacts.php';
        break;
}

$active = 'font-orange';

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
    <!-- Icons -->
    <link href="assets/ionicons.css" rel="stylesheet">
</head>
<body>
<!-- Container -->
<div class="container roboto bcg-green">
    <!-- Wrapper -->
    <div class="wrapper bcg-white">

        <header>
            <nav>
                <ul>
                    <?php foreach ($navigation as $item): ?>
                        <li>
                            <a href="/?p=<?=$item['link']?>"
                               class="lnk <?="{$item['link']}.php" === $page ? $active : ""?>"
                            >
                               <?=$item['name']?>
                            </a>
                        </li>
                    <?endforeach;?>
                </ul>
            </nav>
        </header>

        <main>
            <div class="main__center">
               <?php include "pages/$page"?>
            </div>
        </main>

        <footer>
            <small>© <?= date('Y') ?> <?=$fullName?></small>
        </footer>
    </div>
    <!-- end Wrapper -->
</div>
<!-- end Container -->
</body>
</html>