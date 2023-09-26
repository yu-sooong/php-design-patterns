<?php

namespace Ting\Dp;

/**
 * 稱號介面
 *
 */
abstract class Title implements Adventurer
{
    protected Adventurer $adventurer;

    public function __construct(Adventurer $adventurer)
    {
        $this->adventurer = $adventurer;
    }

    /**
     *
     * @override
     */
    public function attack()
    {
        return $this->adventurer->attack();
    }
}