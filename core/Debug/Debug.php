<?php

class Debug
{

    static ?array $parmas = null;

    public static function dump(...$items)
    {
        echo '<pre>';
        print_r($items);
        echo '</pre>';
    }

    public static function dd(...$items)
    {
        echo '<pre>';
        print_r($items);
        echo '</pre>';
        die;
    }

    public static function params()
    {
        echo '<pre>';
        print_r(Debug::$parmas);
        echo '</pre>';
    }
}