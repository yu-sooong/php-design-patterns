<?php

namespace Ting\Dp\Warrior;

use Ting\Dp\abstract\Adventurer;

class Warrior extends Adventurer
{
    public function display()
    {
        echo "我是戰士: \n";

        $this->weapon->display();

        $this->clothes->display();
    }
}