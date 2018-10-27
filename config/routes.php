<?php
return array(
    //list post number
//    'post/([a-z]+)/([0-9]+)' => 'post/view/$1/$2',
//    'post' => 'post/list',
//    'create' => 'post/create',
//
//    'admin' => 'admin/index', // actionLogin в AdminКонтроллер
//    'login' => 'user/login', // actionLogin в AdminКонтроллер
//    'user' => 'user/login',

    'edit/([0-9]+)' => 'user/edit/$1',
//    'user/logout' => 'site/index',
//    'edit/logout' => 'site/index',
//    'logout' => 'user/logout',
//    'edit/posts' => 'admin',
//    '^/*$' => 'site/index'


     //list post number
    'post/([a-z]+)/([0-9]+)' => 'post/view/$1/$2',
    'post' => 'post/list',
    'create' => 'post/create',

    // Пользователь:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    'admin' => 'admin/index',
    // О магазине
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index'


);