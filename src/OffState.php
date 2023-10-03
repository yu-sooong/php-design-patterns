<?php

namespace Ting\Dp;

class OffState implements State
{
    public function nextMode(): LowBrightnessState
    {
        echo "切斷到低亮度燈光 \n";
        return new LowBrightnessState();
    }
}