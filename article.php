<?php


use App\Controllers\ArticleController;

require_once __DIR__ . '/autoload.php';

spl_autoload_register('my_autoloader');

$controller = new ArticleController();
$controller();