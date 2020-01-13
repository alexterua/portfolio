<?php


namespace App\Models;


use App\BaseModel;

/**
 * Class Social
 * @package App\Models
 */
class Social extends BaseModel
{
    public const TABLE = 'socials';

    public $link;
    public $icon;
}