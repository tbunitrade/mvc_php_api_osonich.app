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
        //$statuses = Post::getStatuses();
        //$postList = $posts['posts'];
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
            Post::createPost($email, $myname, $content , $preview);


        }
        require_once(ROOT.'/views/post/create.php');
        return true;
    }


}