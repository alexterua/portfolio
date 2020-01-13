<?php


namespace App;


class Config
{
    public $data;
    private static $instance;

    private function __construct()
    {
        $config = file_get_contents('.env', );
        $config = explode("\n", $config);
        foreach ($config as $item) {
            $this->data[stristr($item, '=', true)] = trim(mb_substr(stristr($item, '='), 1));
        }
    }

    /**
     * @return object
     */
    public static function getConfig() : object
    {
        if (static::$instance === null) {
            return new static();
        }
        return static::$instance;
    }

}