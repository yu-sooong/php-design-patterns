<?php

namespace Feature;

use PHPUnit\Framework\TestCase;
use Ting\Dp\Adventure;
use Ting\Dp\enum\Attack;
use Ting\Dp\FightStrategy;
use Ting\Dp\ItemAttack;
use Ting\Dp\NormalAttack;
use Ting\Dp\SkillAttack;

class StrategyTest extends TestCase
{
    public function test_use_different_strategy_successful()
    {
        $ad = new Adventure();

        // 遇到小怪物，一般攻擊即可
        $skill = $ad->attack();

        // 斷言為一般攻擊
        $this->assertEquals(Attack::Normal->value, $skill);

        // 遇到小魔王，我需要選擇 "技能" 來攻擊了
        $ad->choiceStrategy(new SkillAttack());
        $skill = $ad->attack();

        // 斷言為技能攻擊
        $this->assertEquals(Attack::Skill->value, $skill);

        // 遇到大魔王，我需要選擇 "道具" 來攻擊了，不然打不死
        $ad->choiceStrategy(new ItemAttack());
        $skill = $ad->attack();

        // 斷言為道具攻擊
        $this->assertEquals(Attack::Item->value, $skill);
    }
}
