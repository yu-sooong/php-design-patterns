<?php

namespace Ting\Dp;

use Ting\Dp\enum\Attack;

/**
 * 使用道具攻擊
 */
class ItemAttack implements FightStrategy
{

    /**
     * @inheritDoc
     */
    public function execute(): string
    {
        echo "使用: " . Attack::Item->value . "\n";
        return Attack::Item->value;
    }
}