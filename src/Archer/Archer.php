<?php

namespace Ting\Dp\Archer;

use Ting\Dp\abstract\Adventurer;

class Archer extends Adventurer
{
    public function display()
    {
        echo "我是弓箭手:\n";

        $this->weapon->display();

        $this->clothes->display();
    }
}