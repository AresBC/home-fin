<?php

namespace Core\Server;


class Server
{
    function getRequest(): Request
    {
        $method = $_SERVER['REQUEST_METHOD'];

        $uriItems = explode('?', $_SERVER['REQUEST_URI']);
        $url = $uriItems[0];

        $urlItems = explode('/', trim($url, '/'));
        $controller = empty($urlItems[0]) ? 'IndexController' : ucfirst($urlItems[0]);
        $action = $urlItems[1] ?? 'index';
        $paramsItems = array_slice($urlItems, 2);

        $params = [];
        for ($i = 0; $i < count($paramsItems);) {
            $key = $paramsItems[$i++];
            $value = $paramsItems[$i++] ?? null;
            $params[$key] = $value;
        }


        return new Request($controller, $action, $method, $params);
    }
}