<?php

namespace Ting\Dp;

use Ting\Dp\enum\Attack;

/**
 * 使用一般攻擊
 */
class NormalAttack implements FightStrategy
{

    /**
     * @inheritDoc
     */
    public function execute(): string
    {
        echo "使用: " . Attack::Normal->value . "\n";
        return Attack::Normal->value;
    }
}