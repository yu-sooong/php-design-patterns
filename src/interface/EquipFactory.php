<?php

namespace Ting\Dp\interface;

use Ting\Dp\abstract\Clothes;
use Ting\Dp\abstract\Weapon;

/**
 * 裝備工廠-定義每一間工廠需要產生的東西
 */
interface EquipFactory
{
    /**
     * 製造武器
     * @return Weapon
     */
    public function productWeapon(): Weapon;

    /**
     * 製造衣服
     * @return Clothes
     */
    public function productClothes(): Clothes;
}