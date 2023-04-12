<?php

namespace Ting\Dp\abstract;

/**
 * 上衣介面 (product)
 */
abstract class Clothes
{
    protected int $def; // 防禦力

    /**
     * @return void
     */
    public function display(): void
    {
        echo "防禦力: $this->def\n";
    }

    /**
     * @param int $def
     * @return Clothes
     */
    public function setDef(int $def): Clothes
    {
        $this->def = $def;
        return $this;
    }

    /**
     * @return int
     */
    public function getDef(): int
    {
        return $this->def;
    }
}