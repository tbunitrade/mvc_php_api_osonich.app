<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link href="./template/css/vendor.css" type="text/css" rel="stylesheet">
    <link href="./template/css/style.css" type="text/css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reseller's form</title>
    <!--<script type="text/javascript" src="./imena/resellers_form/jquery.js"></script>-->
    <link rel="stylesheet" href="./imena/resellers_form/check-form.css" media="all" />


</head>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/"><img src="images/logo.png" alt="Here will be logo image"</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Главная </a></li>
<!--                    <li><a href="post">Надходження</a></li>-->
                    <li><a href="create">Створити домен</a></li>
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