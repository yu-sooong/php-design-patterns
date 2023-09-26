<?php

namespace Ting\Dp;

class Lancer implements Adventurer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * 冒險者名稱
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 攻擊方式
     * @return string
     */
    public function attack(): string
    {
        echo "長槍攻擊";
        return "長槍攻擊";
    }
}