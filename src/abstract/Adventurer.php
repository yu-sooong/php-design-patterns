<?php

namespace Ting\Dp\abstract;

abstract class Adventurer
{
    protected Weapon $weapon; // 武器
    protected Clothes $clothes; // 衣服

    /**
     * @param Weapon $weapon
     * @return Adventurer
     */
    public function setWeapon(Weapon $weapon): Adventurer
    {
        $this->weapon = $weapon;
        return $this;
    }

    /**
     * @param Clothes $clothes
     * @return Adventurer
     */
    public function setClothes(Clothes $clothes): Adventurer
    {
        $this->clothes = $clothes;
        return $this;
    }

    /**
     * 查看冒險者的資訊
     */
    public abstract function display();
}