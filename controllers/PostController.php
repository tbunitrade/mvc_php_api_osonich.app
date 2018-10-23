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

//            $dir_path = $filename;
//            //var_dump( $dir_path);
//            if(is_dir($dir_path))
//            {
//                $files = scandir($dir_path);
//
//                for($i = 0; $i < count($files); $i++)
//                {
//                    if($files[$i] != '.' && $files[$i] != '..')
//                    {
//                        echo "File Name -> $files[$i]<br>";
//
//                        $imageSize = getimagesize("$dir_path$files[$i]");
//
//                        echo " -Image Width : $imageSize[0]<br>";
//
//                        echo " -Image Height : $imageSize[1]<br>";
//
//                        //jpg or png or gif .........
//                        echo " -Image Type : $imageSize[2]<br>";
//
//                        echo " -Image Width And Height: $imageSize[3]<br>";
//
//                        // display the images
//                        echo"<img src='$dir_path$files[$i]' style='width:100px;height:100px;'><br><br>";
//                    }
//                }
//            }

        }
        require_once(ROOT.'/views/post/create.php');
        return true;
    }

    public function actionCrop() {



        return true;
    }
}