<?php

use App\Models\News\Article;

require_once __DIR__ . '/autoload.php';

spl_autoload_register('my_autoloader');

var_dump($_POST);die;

$article = new Article();
