<?php

use App\Controllers\NewsController;

require_once __DIR__ . '/autoload.php';

spl_autoload_register('my_autoloader');


$controller = new NewsController;
$controller();