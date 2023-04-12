<?php

namespace Ting\Dp\abstract;


abstract class Weapon
{
    protected int $alk; // 攻擊力
    protected int $ranger; // 攻擊範圍

    /**
     * @return void
     */
    public function display(): void
    {
        echo "攻擊力: $this->alk  攻擊範圍: $this->ranger\n";
    }

    /**
     * @param int $alk
     * @return Weapon
     */
    public function setAlk(int $alk): Weapon
    {
        $this->alk = $alk;
        return $this;
    }

    /**
     * @return int
     */
    public function getAlk(): int
    {
        return $this->alk;
    }

    /**
     * @param int $ranger
     * @return Weapon
     */
    public function setRanger(int $ranger): Weapon
    {
        $this->ranger = $ranger;
        return $this;
    }

    /**
     * @return int
     */
    public function getRanger(): int
    {
        return $this->ranger;
    }
}