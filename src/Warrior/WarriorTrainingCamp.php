<?php

namespace Ting\Dp\Warrior;

use Ting\Dp\abstract\Adventurer;
use Ting\Dp\interface\EquipFactory;
use Ting\Dp\interface\TrainingCamp;

/**
 * 戰士訓練營
 */
class WarriorTrainingCamp implements TrainingCamp
{
    public EquipFactory $factory;

    public function trainAdventurer(): Adventurer
    {
        echo "step.1 訓練戰士\n";

        $this->factory = new WarriorEquipFactory();

        $warrior = new Warrior();

        echo "step.2 訓練完成\n";
        echo "step.3 配發裝備\n";

        return $warrior
            ->setClothes($this->factory->productClothes())
            ->setWeapon($this->factory->productWeapon());
    }
}