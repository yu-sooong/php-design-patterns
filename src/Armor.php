<?php

namespace Ting\Dp;

use Ting\Dp\abstract\Clothes;
use Ting\Dp\abstract\Weapon;

/**
 * 盔甲-戰士衣服 (ConcreteProduct)
 */
class Armor extends Clothes
{
    public function display(): void
    {
        echo "戰士裝備:";
    }
}