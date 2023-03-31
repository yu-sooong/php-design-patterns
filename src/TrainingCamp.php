<?php

namespace Ting\Dp;

use Ting\Dp\enum\AdventurerTypeName;

class TrainingCamp
{
    /**
     * 訓練營訓練冒險者
     *
     * @param AdventurerTypeName $name :用 Enum 收斂帶入的參數類型
     * @return Warrior|Archer|null
     */
    public function trainAdventurer(AdventurerTypeName $name): Warrior|Archer|null
    {
        return match ($name) {
            $name::from('Archer') => new Archer(),
            $name::from('Warrior') => new Warrior(),
            // 冒險者要新增種類增加 case 即可
            default => null,
        };
    }
}