<?php
/**
 * Created by PhpStorm.
 * User: sierra.sonich
 * Date: 18.10.2018
 * Time: 13:33
 */

class Post
{
    // return Single post by Id
    public static function getPostItemById($id)
    {//db request
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();

            $result = $db->query('SELECT * from post WHERE id=' . $id);

            //$result->setFetchMode(PDO::FETCH_NUM);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $postItem = $result->fetch();

            return $postItem;
        }
    }
    //return list (array) of items
    public static function getPostList()
    {
        $db = Db::getConnection();

        $postList = array();

        $result = $db->query('SELECT id, date, email, content, author_name , preview FROM post ORDER BY date DESC LIMIT 40');
        $i = 0;

        while ($row = $result->fetch()) {
            $postList{$i}['id'] = $row['id'];
            $postList{$i}['date'] = $row['date'];
            $postList{$i}['email'] = $row['email'];
            $postList{$i}['content'] = $row['content'];
            $postList{$i}['author_name'] = $row['author_name'];
            $postList{$i}['preview'] = $row['preview'];
            $i++;
        }

        return $postList;
    }

    public static function createPost($email, $content, $myname, $preview)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO post '
                .'( email, content, author_name, preview)'
                .'VALUES'
                ."('$email','$content','$myname','$preview')";


        $result= $db->exec($sql);

        return true;
    }

    public static function updatePost($id)
    {
        $db = Db::getConnection();
        $sql = '
            UPDATE post SET
                email = :email,
                content = :content,
                author_name = :author_name,
                preview = :preview           
            
            WHERE 
            id = :id 
            ';


        $result= $db->exec($sql);

        return true;
    }


}