<?php


namespace App\Models\News;


use App\BaseModel;

/**
 * Class Author
 * @package App\Models\News
 */
class Author extends BaseModel
{
    public const TABLE = 'authors';

    public $name;
}