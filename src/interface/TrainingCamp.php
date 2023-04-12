<?php

namespace Ting\Dp\interface;

use Ting\Dp\abstract\Adventurer;

/**
 * 工廠介面-冒險者訓練營(這只是一個概念或規範，要訓練什麼，怎麼訓練留給子類別實作)
 */
interface TrainingCamp
{
    public function trainAdventurer(): Adventurer;
}