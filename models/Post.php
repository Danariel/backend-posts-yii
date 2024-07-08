<?php 

namespace app\models;


/**
 * @property int $id
 * @property int $userId
 * @property string $title
 * @property string $body
 */
class Post
{
    public function rules()
    {
        return [
            [['id', 'userId', 'title', 'body'], 'required'],
            ['title', 'string', 'maxLength' => 255],
        ];
    }
}