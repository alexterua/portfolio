<?php


namespace App\Models;


use App\BaseModel;

/**
 * Class Work
 * @package App\Models
 */
class Work extends BaseModel
{
    public const TABLE = 'works';

    public $title;
    public $image;
    public $description;
}