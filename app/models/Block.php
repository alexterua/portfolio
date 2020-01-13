<?php


namespace App\Models;


use App\BaseModel;

/**
 * Class Block
 * @package App\Models
 */
class Block extends BaseModel
{
    public const TABLE = 'blocks';

    public $title;
    public $content;
}