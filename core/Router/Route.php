<?php

namespace Core\Router;

class Route
{
    public readonly string $controller;
    public readonly string $action;
    public readonly string $method;

    function __construct(string $controller, string $action, string $method)
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->method = $method;
    }
}