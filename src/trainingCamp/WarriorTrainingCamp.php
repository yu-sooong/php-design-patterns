<?php

namespace Ting\Dp\trainingCamp;

use Ting\Dp\interface\TrainingCamp;
use Ting\Dp\Warrior;

class WarriorTrainingCamp implements TrainingCamp
{
    /**
     * 戰士訓練營訓練實作
     * @return Warrior
     */
    public function trainAdventurer(): Warrior
    {
        echo "訓練戰士⚔️";
        echo "\n訓練完了\n";

        return new Warrior();
    }
}