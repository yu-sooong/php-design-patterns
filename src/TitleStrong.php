<?php

namespace Ting\Dp;

/**
 *
 * 稱號-強壯
 */
class TitleStrong extends Title
{

    public function __construct(Adventurer $adventurer)
    {
        parent::__construct($adventurer);
    }

    /**
     * 因為有稱號加持，讓攻擊力增加
     * @override
     * @return void
     */
    public function attack(): void
    {
        echo "\n猛力加持~";
        parent::attack();
    }
}