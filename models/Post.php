<?php
/**
 * Created by PhpStorm.
 * User: sierra.sonich
 * Date: 18.10.2018
 * Time: 13:33
 */

class Post
{

    private static $itemsPerPage = 10;

    public static function getStatuses()
    {
        $db = Db::getConnection();
        $result = $db->query('SELECT * from status ');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result->fetchAll();
    }

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

    private static function getPageCount()
    {
        $db = Db::getConnection();
        $result = $db->query('SELECT COUNT(*) AS Cnt FROM post ');
        if ($res = $result->fetch()) {
            return ceil(intval($res["Cnt"])/Post::$itemsPerPage);
        }
        return 0;
    }

    public static function getPostList()
    {
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $sort = isset($_GET['sort']) ? strval($_GET['sort']) : 'date';
        $direction = isset($_GET['direction']) ? strval($_GET['direction']) : 'DESC';

        $db = Db::getConnection();
        $cntPages = Post::getPageCount();
        $page = ($page < 1) ? 1 : $page;
        $page = ($page > $cntPages) ? $cntPages : $page;
        $sql = "
            SELECT id, date, email, content, author_name, preview, status_id
            FROM post
            ORDER BY " . $sort . " " . $direction . " 
            LIMIT " . (($page - 1) * Post::$itemsPerPage) . ", " . Post::$itemsPerPage . "
        ";
        $postList = array();

//        $result = $db->query('SELECT id, date, email, content, author_name, preview FROM post ORDER BY date DESC LIMIT 40');
        $result = $db->query($sql);
        $i = 0;

        while ($row = $result->fetch()) {
            $postList{$i}['id'] = $row['id'];
            $postList{$i}['date'] = $row['date'];
            $postList{$i}['email'] = $row['email'];
            $postList{$i}['content'] = $row['content'];
            $postList{$i}['author_name'] = $row['author_name'];
            $postList{$i}['preview'] = $row['preview'];
            $postList{$i}['status_id'] = $row['status_id'];
            $i++;
        }

        return [
            'page' => $page,
            'sort' => $sort,
            'direction' => $direction,
            'pages' => $cntPages,
            'posts' => $postList,
            ];
    }

    public static function createPost($email, $city, $postindex, $street, $house, $room, $tel, $content, $myname, $secondname, $lastname , $preview, $regip)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO post '
                .'( email, city, postindex, street, house, room, tel, content, author_name, secondname, lastname , preview, regip)'
                .'VALUES'
                ."('$email','$city','$postindex','$street','$house','$room','$tel','$content','$myname','$secondname','$lastname','$preview','$regip')";

        $result= $db->exec($sql);

        return true;
    }

    public static function updatePost($id, $email, $city, $postindex, $street, $house, $room, $myname, $content, $status )
    {
        $db = Db::getConnection();
        $sql = "
            UPDATE post SET
                email = '" . $email . "',
                content = '" . $myname . "',
                author_name = '" . $content . "',
                status_id = '" . $status . "'
            
            WHERE 
            id = " . $id . "   
            ";
        $result = $db->exec($sql);
        return $result;
    }

    public static function updateStatus($id, $status )
    {
        $db = Db::getConnection();
        $sql = "
            UPDATE post SET
                status = '" . $status . "'             
            WHERE 
            id = " . $id . "   
            ";



        $result= $db->exec($sql);

        return true;
    }
}