<?php
/**
 * Created by PhpStorm.
 * User: sierra.sonich
 * Date: 18.10.2018
 * Time: 11:28
 */
include_once ROOT. '/models/Post.php';

class PostController
{
    public function actionList()
    {
        $postList = array();
        $posts = Post::getPostList();
        $statuses = Post::getStatuses();
        $postList = $posts['posts'];
        require_once(ROOT.'/views/post/index.php');
        return true;
    }

    public function actionView($category, $id)
    {
        if($id) {
            $postItem = Post::getPostItemById($id);
            $statuses = Post::getStatuses();
            require_once(ROOT.'/views/post/post.php');
            //echo ' actiovView ';
        }
        return true;
    }

    public function actionCreate()
    {
        if ( isset($_POST['submit'])) {
            //    Post::createPost($email, $myname, $content);
            $myname = $_POST['myname'];
            $secondname = $_POST['secondname'];
            $lastname = $_POST['lastname'];
            $tmpfile = $_FILES['file']['tmp_name'];
            $filename = $_FILES['file']['name'];
            $uploaddir = 'uploads/';
            $uploadfile = $uploaddir . $filename;
//            if(move_uploaded_file($tmpfile, $uploadfile)) {
//                echo 'filehere' . $uploadfile;
//            }
            $preview = $uploadfile;
            $regip = '192.168.1.1';
            $email = $_POST['email'];

            $city = $_POST['city'];
            $postindex = $_POST['postindex'];
            $street = $_POST['street'];
            $house = $_POST['house'];
            $room = $_POST['room'];

            $tel = $_POST['telephone'];

            $content = $_POST['content'];
            Post::createPost($email, $city, $postindex, $street, $house, $room, $tel, $content, $myname, $secondname, $lastname , $preview, $regip);


        }
        require_once(ROOT.'/views/post/create.php');
        return true;
    }


}