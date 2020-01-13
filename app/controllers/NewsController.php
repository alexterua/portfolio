<?php


namespace App\Controllers;


use App\BaseController;
use App\Models\News\Article;

class NewsController extends BaseController
{
    public function handle()
    {
        $news = Article::getLastNews(5); // 3 - default count latest news
        echo $this->view->assign('news', $news)->render('news/news');
    }
}