<?php

namespace Feature;

use PHPUnit\Framework\TestCase;
use Ting\Dp\Lancer;
use Ting\Dp\TitleAgile;
use Ting\Dp\TitleFire;
use Ting\Dp\TitleStrong;

class TitleTest extends TestCase
{
    public function test_successful()
    {
        // 一開始沒有稱任何 "稱號" 的冒險者
        $lancer = new Lancer("Ting");
        $name = $lancer->getName();

        echo "---我是一般冒險者，$name---\n";

        // 只有一般的長槍攻擊
        $this->assertTrue("長槍攻擊" === $lancer->attack());

        echo "\n";
        // 獲得強壯稱號的 Ting
        echo "\n---獲得強壯稱號的 Ting---";
        $hasStrongAdventurer = new TitleStrong($lancer);
        // 這時候的冒險者已經有 "強壯" 加持
        $hasStrongAdventurer->attack();

        echo "\n";
        echo "\n---獲得敏捷稱號的 Ting---";
        $hasAgileAdventurer = new TitleAgile($hasStrongAdventurer);
        $hasAgileAdventurer->attack();
        $hasAgileAdventurer->useFlash();

        echo "\n";
        echo "\n---獲得燃燒稱號的 Ting---";
        $hasAgileAdventurer = new TitleFire($hasAgileAdventurer);
        $hasAgileAdventurer->attack();
        $hasAgileAdventurer->fireball();

        echo "\n";
        echo "\n稱號可以重複，只是我目前的稱號是強壯並沒有燃燒的特殊技能 '火球' 夠使用";
        echo "\n---獲得非常強壯稱號的 Ting---";
        $hadStrong = new TitleStrong($hasAgileAdventurer);
        $hadStrong->attack();


    }
}