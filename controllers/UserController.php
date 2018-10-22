<?php
/**
 * Created by PhpStorm.
 * User: sierra.sonich
 * Date: 22.10.2018
 * Time: 13:44
 */

class UserController
{

    /**
     * Action для страницы "Регистрация"
     */
    public function actionRegister()
    {
        // Переменные для формы
        $name = false;
        $email = false;
        $password = false;
        $result = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Регистрируем пользователя
                $result = User::register($name, $email, $password);
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/user/register.php');
        return true;
    }
    public function actionLogin()
    {
        // Переменные для формы
        $email = false;
        $password = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);

                // Перенаправляем пользователя в закрытую часть - кабинет
                header("Location: /admin");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    /**
     * Удаляем данные о пользователе из сессии
     */
    public function actionLogout()
    {
        // Стартуем сессию
        session_start();

        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["user"]);

        // Перенаправляем пользователя на главную страницу
        header("Location: /");
    }

    public function actionUser() {

        // Удаляем информацию о пользователе из сессии

        require_once(ROOT . '/views/admin/index.php');
        return true;
    }

    public function actionPost() {
        $postList = array();
        $postList = Post::getPostList();
        require_once(ROOT.'/views/user/posts.php');

        return true;
    }

    public function actionEdit( $id) {


        if ( isset($_POST['submit'])) {
            //    Post::createPost($email, $myname, $content);
            $myname = $_POST['myname'];

            $tmpfile = $_FILES['file']['tmp_name'];
            $filename = $_FILES['file']['name'];
            $uploaddir = 'uploads/';
            $uploadfile = $uploaddir . $filename;
//            if(move_uploaded_file($tmpfile, $uploadfile)) {
//                echo 'filehere' . $uploadfile;
//            }

            $preview = $uploadfile;

            $email = $_POST['email'];
            $content = $_POST['content'];

            User::updatePost($email, $myname, $content , $preview);

        }

        if($id) {
            $postItem = Post::getPostItemById($id);
            require_once(ROOT . '/views/user/edit.php');
        }


        return true;
    }

}