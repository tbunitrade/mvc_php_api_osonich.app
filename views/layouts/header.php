<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link href="/template/css/vendor.css" type="text/css" rel="stylesheet">
    <link href="/template/css/style.css" type="text/css" rel="stylesheet">

    <title>Document</title>
</head>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="task">Тестовый таск</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Главная </a></li>
                    <li><a href="post">Задания</a></li>
                    <li><a href="create">Создать задане</a></li>
                    <?php
                    if (isset($_SESSION['user'])) {
                        ?>
                        <li ><a href="admin">Кабинет</a> </li>
                    <?php
                    }
                    else { ?>
                        <li><a href="login">Войти</a></li>
                    <?php
                    }
                    ?>



                </ul>
            </div>
        </nav>
    </div>
</div>