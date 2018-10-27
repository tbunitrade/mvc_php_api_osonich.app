<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
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

                <div class="row">
                    <div class="col-md-7">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/"><img src="images/logo.png" alt="Here will be logo image"</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Главная </a></li>
                            <li><a href="/post">Надходження</a></li>
                            <li><a href="/create">Створити домен</a></li>

                        </ul>

                    </div>
                    <div class="col-md-5">
                        <div class="menu pull-right">
                            <ul class="nav navbar-nav">
                                <?php if (User::isGuest()): ?>
                                    <li><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a></li>
                                <?php else: ?>
                                    <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                                    <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
        </nav>
    </div>
</div>