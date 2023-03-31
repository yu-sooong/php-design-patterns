<?php

namespace Ting\Dp\trainingCamp;

use Ting\Dp\Archer;
use Ting\Dp\interface\TrainingCamp;

class ArcherTrainingCamp implements TrainingCamp
{
    /**
     * 弓箭手訓練營實作
     * @return Archer
     */
    public function trainAdventurer(): Archer
    {
        echo "訓練弓箭手🏹";
        echo "\n訓練完成\n";

        return new Archer();
    }
}