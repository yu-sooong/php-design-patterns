<?php

namespace Ting\Dp\Archer;

use Ting\Dp\abstract\Adventurer;
use Ting\Dp\interface\EquipFactory;
use Ting\Dp\interface\TrainingCamp;

/**
 * 弓箭手訓練營
 */
class ArcherTrainingCamp implements TrainingCamp
{
    public EquipFactory $factory;

    public function trainAdventurer(): Adventurer
    {
        echo "step.1 訓練弓箭手\n";

        $this->factory = new ArcherEquipFactory();

        $archer = new Archer();

        echo "step.2 訓練完成\n";
        echo "step.3 配發裝備\n";

        return $archer
            ->setWeapon($this->factory->productWeapon())
            ->setClothes($this->factory->productClothes());
    }
}