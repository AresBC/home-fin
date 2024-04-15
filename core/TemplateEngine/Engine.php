<?php

namespace Core\TemplateEngine;

use Core\AssetLoader\AssetLoader;
use Debug;

class Engine
{

    public function render(View $view, $params = []): string
    {

        $params = [...$params, ...$view->params];

        if (class_exists(Debug::class)) {
            Debug::$parmas = $params;
        }


        // "string $_" is the path to the view.
        $_ = __DIR__ . '/../../resources/views/' . $view->path;
        unset($view);

        ob_start();

        extract($params);
        unset($params);

        require $_;


        return ob_get_clean();
    }
}