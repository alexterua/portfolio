<?php


namespace App\Models;


use App\BaseModel;

/**
 * Class Review
 * @package App\Models
 */
class Review extends BaseModel
{
    public const TABLE = 'reviews';

    public $text;
    public $author;
    public $avatar;
}