<?php


namespace App\Models;


use App\BaseModel;

/**
 * Class Service
 * @package App\Models
 */
class Service extends BaseModel
{
    public const TABLE = 'services';

    public $title;
    public $icon;
    public $description;
}