<?php

namespace Core\AssetLoader;

class AssetLoader
{
    public function css(string $path)
    {
        $path = "/assets/css/$path.css";
        return "<link rel='stylesheet' type='text/css' href='{$path}' />";
    }
    public function js(string $path)
    {
        $path = "/assets/js/$path.js";
        return "<script type='module' src='{$path}'></script>";
    }
}