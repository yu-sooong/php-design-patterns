<?php

namespace Ting\Dp\Archer;

use Ting\Dp\abstract\Clothes;
use Ting\Dp\abstract\Weapon;
use Ting\Dp\Bow;
use Ting\Dp\interface\EquipFactory;
use Ting\Dp\Leather;

/**
 * 專門生產弓箭手裝備的工廠 (ConcreteFactory)
 */
class ArcherEquipFactory implements EquipFactory
{
    /**
     * @return Weapon
     */
    public function productWeapon(): Weapon
    {
        $bow = new Bow();
        return $bow->setAlk(15)->setRanger(180);
    }

    /**
     * @return Clothes
     */
    public function productClothes(): Clothes
    {
        $leather = new Leather();
        return $leather->setDef(20);
    }
}