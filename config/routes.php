<?php
return array(
    //list post number
    'post/([a-z]+)/([0-9]+)' => 'post/view/$1/$2',
    'post' => 'post/list',
    'create' => 'post/create',

    'admin' => 'admin/index', // actionLogin в AdminКонтроллер
    'login' => 'user/login', // actionLogin в AdminКонтроллер
    'user' => 'user/login',

    'edit/([0-9]+)' => 'user/edit/$1',
    'user/logout' => 'site/index',
    'edit/logout' => 'site/index',

    'edit/posts' => 'admin',
    '^/*$' => 'site/index'


);