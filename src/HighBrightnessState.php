<?php

namespace Ting\Dp;

class HighBrightnessState implements State
{
    public function nextMode(): OffState
    {
        echo "切換到關閉燈光 \n";
        return new OffState();
    }
}