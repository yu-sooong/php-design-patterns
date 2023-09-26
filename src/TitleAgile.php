<?php

namespace Ting\Dp;

/**
 * 稱號-敏捷
 *
 */
class TitleAgile extends Title
{
    public function __construct(Adventurer $adventurer)
    {
        parent::__construct($adventurer);
    }

    /**
     * 因為有敏捷加持，讓速度增加
     *
     * @override
     * @return void
     */
    public function attack(): void
    {
        echo "\n快速~";
        parent::attack();
    }

    /**
     * 因為敏捷稱號，學習到的新技能
     *
     * @return void
     */
    public function useFlash(): void
    {
        echo "\n使用瞬間移動~";
    }
}