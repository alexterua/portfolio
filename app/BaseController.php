<?php


namespace App;


abstract class BaseController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    protected function access() : bool
    {
        return true;
    }

    public function __invoke()
    {
        if ($this->access()) {
            return $this->handle();
        } else {
            die('Доступ закрыт!');
        }
    }

    abstract public function handle();
}