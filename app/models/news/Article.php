<?php


namespace App\Models\News;


use App\BaseModel;
use App\Db;

/**
 * Class Article
 * @package App\Models\News
 */
class Article extends BaseModel
{
    public const TABLE = 'news';

    public $title;
    public $content;
    public $image;
    public $author_id;

    /**
     * @param int $count
     * @return array
     */
    public static function getLastNews(int $count = 3)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $count;
        return $db->query($sql, static::class);
    }

    public function __get($name)
    {
        if ($name === 'author') {
            if (!empty($this->author_id)) {
                $author = new Author;
                return $author->getById($this->author_id)[0]->name;
            }
        }
        return null;
    }
}