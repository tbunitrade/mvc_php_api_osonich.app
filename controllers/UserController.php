<?php
/**
 * Created by PhpStorm.
 * User: sierra.sonich
 * Date: 22.10.2018
 * Time: 13:44
 */

class UserController
{
    public function actionLogin()
    {
        // Переменные для формы
        $email = false;
        $password = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkName($name)) {
                $errors[] = 'Неправильный name';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            // Проверяем существует ли пользователь
            $userId = User::checkUserData($name, $password);

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
       echo 'logout';
        return true;
    }

    public function actionUser() {

        // Удаляем информацию о пользователе из сессии

        require_once(ROOT . '/views/admin/index.php');

        return true;
    }

    public function actionPost() {
        $postList = array();
        $posts = Post::getPostList();
        $statuses = Post::getStatuses();
        $postList = $posts['posts'];
        require_once(ROOT.'/views/user/posts.php');

        return true;
    }

    public function actionEdit($id) {
        // Обновляем запись

        if ( isset($_POST['id'])) {
            $myname = $_POST['myname'];
            $email = $_POST['email'];
            $content = $_POST['content'];
            $status = $_POST['status'];

            Post::updatePost($id, $email, $myname, $content, $status );
            header("Location: /user/posts");
            return true;
//            Post::updateStatus($id, $status);


        }

        if($id) {
            $postItem = Post::getPostItemById($id);
            $statuses = Post::getStatuses();
            require_once(ROOT . '/views/user/edit.php');
        }

        return true;
    }
}