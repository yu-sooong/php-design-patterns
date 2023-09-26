<?php

namespace Ting\Dp;

/**
 *
 * 稱號-燃燒
 */
class TitleFire extends Title
{
    public function __construct(Adventurer $adventurer)
    {
        parent::__construct($adventurer);
    }

    /**
     * 因為有稱號加持，增加燃燒攻擊
     * @override
     * @return void
     */
    public function attack(): void
    {
        echo "\n燃燒吧，火鳥～";
        parent::attack();
    }

    /**
     * 因有燃燒稱號，學習到的新技能
     * @return void
     */
    public function fireball(): void
    {
        echo "\n使用火球~";
    }
}