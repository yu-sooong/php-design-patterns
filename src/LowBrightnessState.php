<?php

namespace Ting\Dp;

class LowBrightnessState implements State
{
    public function nextMode(): HighBrightnessState
    {
        echo "切換到高亮度燈光 \n";
        return new HighBrightnessState();
    }
}