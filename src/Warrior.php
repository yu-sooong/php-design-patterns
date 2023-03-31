<?php

namespace Ting\Dp;

use Ting\Dp\interface\Adventurer;

class Warrior implements Adventurer
{
    public function getType(): string
    {
        echo "給你一個勇士\n";
        return 'Warrior';
    }
}
