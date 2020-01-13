<?php


namespace App\Controllers;


use App\BaseController;
use App\Models\News\Article;

class ArticleController extends BaseController
{
    public function handle()
    {
        $article = Article::getById($_GET['id'])[0];
        echo $this->view->assign('article', $article)->render('news/article');
    }
}