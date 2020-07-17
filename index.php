
<?php

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Резюме - {{Имя}} {{Фамилия}}</title>
    <!-- CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Load Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,100,300italic,300,100italic,400italic,500,500italic,700,700italic&amp;subset=latin,cyrillic' rel='stylesheet'>
    <!-- Icons -->
    <link href="assets/css/ionicons.css" rel="stylesheet">
</head>
<body>
<!-- Container -->
<div class="container roboto bcg-green">
    <!-- Wrapper -->
    <div class="wrapper bcg-white">

        <header>
            <nav>
                <ul>
                    <li><a href="/?p=main" class="lnk">Главная</a></li>
                    <li><a href="/?p=resume" class="lnk">Резюме</a></li>
                    <li><a href="/?p=portfolio" class="lnk">Портфолио</a></li>
                    <li><a href="/?p=contacts" class="lnk">Контанты</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="main__center">
                <div class="main__center">
                    <div class="main__center-smallbox">
                        <h1>Привет! Меня зовут {{Имя}} {{Фамилия}}</h1>
                        <p>Я {{Профессия}}</p>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <small>© {{Текущий год}} {{Имя}} {{Фамилия}}</small>
        </footer>
    </div>
    <!-- end Wrapper -->
</div>
<!-- end Container -->
<!-- JS -->
<script src="assets/js/jQuery.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>