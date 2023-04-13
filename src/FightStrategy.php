<?php

namespace Ting\Dp;

/**
 * 戰鬥策略
 */
interface FightStrategy
{
    /**
     * 執行策略
     */
    public function execute();
}