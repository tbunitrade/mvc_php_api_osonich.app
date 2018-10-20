<?php
return array(
    //list post number
    'post/([a-z]+)/([0-9]+)' => 'post/view/$1/$2',
    'post' => 'post/list',
    'create' => 'post/create',

//    'post' => 'post/list', // actionIndex в ПостКонтроллер
//    'create' => 'post/create', // actionCreate в ПостКонтроллер

    'admin' => 'admin/login', // actionLogin в AdminКонтроллер
    'login' => 'site/login', // actionLogin в AdminКонтроллер

    '^/*$' => 'site/index'

);