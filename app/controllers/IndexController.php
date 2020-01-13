<?php


namespace App\Controllers;


use App\BaseController;
use App\Models\Block;
use App\Models\Navigation;
use App\Models\Review;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Work;

class IndexController extends BaseController
{
    public function handle()
    {
        $blocks = Block::getAll();

        $menu = Navigation::getAll();

        $services = Service::getAll();

        $works = Work::getAll();

        $skills = Skill::getAll();

        $reviews = Review::getAll();

        $socials = Social::getAll();

        echo $this->view->assign('blocks', $blocks)
                        ->assign('menu', $menu)
                        ->assign('services', $services)
                        ->assign('works', $works)
                        ->assign('skills', $skills)
                        ->assign('reviews', $reviews)
                        ->assign('socials', $socials)
                        ->render('index');
    }
}