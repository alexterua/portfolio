<?php

use App\Models\News\Article;
use App\View;


require_once __DIR__ . '/autoload.php';

spl_autoload_register('my_autoloader');

$news = Article::getAll();

$view = new View();
echo $view->assign('news', $news)->render('admin/index');