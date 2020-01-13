<?php


namespace App\Models;


use App\BaseModel;

/**
 * Class Skill
 * @package App\Models
 */
class Skill extends BaseModel
{
    public const TABLE = 'skills';

    public $name;
    public $percent;
}