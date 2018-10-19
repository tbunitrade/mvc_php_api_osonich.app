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
        $postList = Post::getPostList();
        require_once(ROOT.'/views/post/index.php');

        return true;
    }

    public function actionView($category, $id)
    {
        if($id) {
            $postItem = Post::getPostItemById($id);

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
            $email = $_POST['email'];
            $content = $_POST['content'];
            Post::createPost($email, $myname, $content);

        }

        require_once(ROOT.'/views/post/create.php');
        return true;
    }
}