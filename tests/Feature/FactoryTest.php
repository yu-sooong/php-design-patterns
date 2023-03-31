<?php

namespace Feature;

use PHPUnit\Framework\TestCase;
use Ting\Dp\enum\AdventurerTypeName;
use Ting\Dp\trainingCamp\ArcherTrainingCamp;
use Ting\Dp\trainingCamp\WarriorTrainingCamp;

class FactoryTest extends TestCase
{
    public function test_the_train_adventurer_successful()
    {
        $trainCamp = new ArcherTrainingCamp();
        $adventurerA = $trainCamp->trainAdventurer()->getType();

        $trainCamp = new WarriorTrainingCamp();
        $adventurerB = $trainCamp->trainAdventurer()->getType();

        // 斷言弓箭手訓練營出來的是否為我們預期的冒險者
        $this->assertEquals(AdventurerTypeName::ARCHER->value, $adventurerA);

        // 斷言戰士訓練營出來的是否為我們預期的冒險者
        $this->assertEquals(AdventurerTypeName::WARRIOR->value, $adventurerB);
    }

    public function test_the_train_adventurer_fail()
    {
        $archerTrainCamp = new ArcherTrainingCamp();
        $archer = $archerTrainCamp->trainAdventurer()->getType();

        // 斷言弓箭手訓練營出來的冒險者不該為 "戰士"！
        $this->assertNotEquals(AdventurerTypeName::WARRIOR->value, $archer);

        // 弓箭手訓練營出來的就是要弓箭手！
        $this->assertEquals(AdventurerTypeName::ARCHER->value, $archer);
    }
}