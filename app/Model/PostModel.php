<?php

namespace App\Model;

// use App\Weblitzer\Model;
use App\Weblitzer\Model as ModelMVC; //alias
use App\App;
// class PostModel extends \App\Weblitzer\Model 
// class PostModel extends Model
class PostModel extends ModelMVC
{
    protected static $table = 'post';
    public static function insert($post)
    {
        App::getDataBase()->prepareInsert(
            'INSERT INTO ' . self::$table . ' (title, content, author) VALUES (?,?,?) ',
            [
                $post['title'],
                $post['content'],
                $post['author']
            ]
        );
    }
}
