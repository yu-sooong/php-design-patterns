<?php

namespace Ting\Dp\Warrior;

use Ting\Dp\abstract\Clothes;
use Ting\Dp\abstract\Weapon;
use Ting\Dp\Armor;
use Ting\Dp\interface\EquipFactory;
use Ting\Dp\LongSword;

/**
 * 專門生產戰士裝備的工廠 (ConcreteFactory)
 */
class WarriorEquipFactory implements EquipFactory
{
    /**
     * @return Weapon
     */
    public function productWeapon(): Weapon
    {
        $longWord = new LongSword();
        return $longWord->setAlk(25)->setRanger(50);
    }

    /**
     * @return Clothes
     */
    public function productClothes(): Clothes
    {
        $armor = new Armor();
        return $armor->setDef(25);
    }
}