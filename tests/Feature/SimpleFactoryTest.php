<?php

namespace Feature;

use PHPUnit\Framework\TestCase;
use Ting\Dp\Archer;
use Ting\Dp\enum\AdventurerTypeName;
use Ting\Dp\TrainingCamp;
use Ting\Dp\Warrior;

class SimpleFactoryTest extends TestCase
{
    public function test_the_adventurer_returns_a_successful_type_name()
    {
        $this->assertTrue((new Archer())->getType() == AdventurerTypeName::ARCHER->value);
        $this->assertTrue((new Warrior())->getType() == AdventurerTypeName::WARRIOR->value);
    }

    public function test_the_adventurer_returns_a_fail_type_name(): void
    {
        $this->assertTrue((new Archer())->getType() != AdventurerTypeName::WARRIOR->value);
        $this->assertTrue((new Warrior())->getType() != AdventurerTypeName::ARCHER->value);
    }

    public function test_the_training_adventurer_camp_returns_a_successful_object(): void
    {
        $trainingAdventurerCamp = new TrainingCamp();
        $this->assertInstanceOf(
            Archer::class,
            $trainingAdventurerCamp->trainAdventurer(AdventurerTypeName::ARCHER)
        );

        $this->assertInstanceOf(
            Warrior::class,
            $trainingAdventurerCamp->trainAdventurer(AdventurerTypeName::WARRIOR)
        );
    }
}