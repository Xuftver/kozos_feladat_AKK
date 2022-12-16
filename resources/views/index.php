<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content=<?php $token = csrf_token(); echo $token;?>>
    <link rel="stylesheet" href="/../css/index.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="/../js/index.js" type="module"></script>
    <title>Weinberger Péter</title>
</head>
<body>
    <main>
        <header>
            <nav>
                <ul>
                    <!-- <li id="publikusEsemeny"><a href="#">Publikus Esemény</a></li> -->
                    <li id="publikusEsemeny"><a href="esemenyek">Publikus Esemény</a></li>
                    <!-- <li id="esemenyAdmin"><a href="#">Esemény Admin</a></li> -->
                    <li id="esemenyAdmin"><a href="admin_esemenyek">Esemény Admin</a></li>
                    <!-- <li id="ugynoksegAdmin"><a href="#">Ügynökség Admin</a></li> -->
                    <li id="ugynoksegAdmin"><a href="admin_ugynoksegek">Ügynökség Admin</a></li>
                </ul>
            </nav>
        </header>
        <article></article>
        <footer></footer>
    </main>
</body>
</html>