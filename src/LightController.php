<?php

namespace Ting\Dp;

/**
 * 燈光控制器
 */
class LightController
{
    public State $currentState;

    public function __construct()
    {
        $this->currentState = new OffState();
    }

    public function getCurrentState(): State
    {
        return $this->currentState;
    }

    public function pressButton(): void
    {
        $this->currentState = $this->currentState->nextMode();
    }
}