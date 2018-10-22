<?php
/**
 * Created by PhpStorm.
 * User: sierra.sonich
 * Date: 18.10.2018
 * Time: 12:12
 */

class AdminController extends AdminBase
{
    public function actionIndex() {
        // Проверка доступа
       self::checkAdmin();

       echo 'adminka';

        // Подключаем вид
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }


}