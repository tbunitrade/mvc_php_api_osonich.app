<?php
return array(
    //list post number
    'post/([a-z]+)/([0-9]+)' => 'post/view/$1/$2',
    'post' => 'post/list',
    'create' => 'post/create',

//    'post' => 'post/list', // actionIndex в ПостКонтроллер
//    'create' => 'post/create', // actionCreate в ПостКонтроллер

    'admin' => 'admin/index', // actionLogin в AdminКонтроллер
    'login' => 'user/login', // actionLogin в AdminКонтроллер
    'user/' => 'admin/index',

    'edit/([0-9]+)' => 'user/edit/$1/$2',
    'user/logout' => 'user/logout',

    '^/*$' => 'site/index'

);