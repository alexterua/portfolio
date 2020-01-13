<?php


namespace App\Models;


use App\BaseModel;

/**
 * Class Navigation
 * @package App\Models
 */
class Navigation extends BaseModel
{
    public const TABLE = 'menu';

    public $title;
    public $link;
}