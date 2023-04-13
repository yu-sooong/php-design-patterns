<?php

namespace Ting\Dp;

use Ting\Dp\enum\Attack;

/**
 * 使用技能攻擊
 */
class SkillAttack implements FightStrategy
{

    /**
     * @inheritDoc
     */
    public function execute(): string
    {
        echo "使用: " . Attack::Skill->value . "\n";
        return Attack::Skill->value;
    }
}