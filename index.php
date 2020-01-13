<?php

use App\Controllers\IndexController;

require_once __DIR__ . '/autoload.php';

spl_autoload_register('my_autoloader');


$controller = new IndexController;
$controller();