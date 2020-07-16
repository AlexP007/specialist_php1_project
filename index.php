<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Резюме - {{имя}}</title>
    <!-- Load Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,100,300italic,300,100italic,400italic,500,500italic,700,700italic&amp;subset=latin,cyrillic' rel='stylesheet'>
</head>
<body>
<!-- Container -->
<div class="container">

    <!-- Header -->
    <header>
        <div class="head">
            <nav class="nav">
                <ul>
                    <li><a href="/?p=resume" class="lnk">Резюме</a></li>
                    <li><a href="/?p=portfolio" class="lnk">Портфолио</a></li>
                    <li><a href="/?p=blog" class="lnk">Блог</a></li>
                    <li><a href="/?p=contacts" class="lnk">Контанты</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Started -->
        <section class="section started">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="started-content">
                        <h1>Привет! Меня зовут {{имя}}</h1>
                        <p>Я профессиональный разработчик php</p>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <footer>
        <small class="copy">© {{Дата}} {{имя}}</small>
    </footer>

</div>
</body>
</html>