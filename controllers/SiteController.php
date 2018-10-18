<?php
/**
 * Created by PhpStorm.
 * User: sierra.sonich
 * Date: 18.10.2018
 * Time: 16:21
 */

class SiteController
{
    public function actionIndex() {

        require_once (ROOT . '/views/site/index.php');

        return true;
    }
}