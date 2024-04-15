<?php

namespace Core\Json;

class Json
{
    private array|object $data;
    public function __construct(array|object $data)
    {
        $this->data = $data;
    }

    public function __toString(): string
    {
        return json_encode($this->data);
    }
}