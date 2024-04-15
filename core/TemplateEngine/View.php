<?php

namespace Core\TemplateEngine;

class View
{
    public readonly string $path;
    public array $params;
    public function __construct(string $path, array $params = [])
    {
        $this->path = $path;
        $this->params = $params;
    }
}