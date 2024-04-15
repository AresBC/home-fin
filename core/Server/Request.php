<?php

namespace Core\Server;

class Request
{
    public readonly string $controller;
    public readonly string $action;
    public readonly string $method;
    public readonly array $params;

    public function __construct(string $controller, string $action, string $method, $params)
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->method = $method;
        $this->params = $params;
    }
}