<?php

namespace Ting\Dp;

use Ting\Dp\Observer;

class ConcreteObserver implements Observer
{
    public mixed $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update($data): string
    {
        // TODO: Implement update() method.
        return "{$this->name} 收到更新: {$data}";
    }
}