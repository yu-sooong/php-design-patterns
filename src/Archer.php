<?php

namespace Ting\Dp;

use Ting\Dp\interface\Adventurer;

class Archer implements Adventurer
{
    public function getType(): string
    {
        echo "訓練完成;\n";
        echo "給你一個弓箭手\n";
        return 'Archer';
    }
}