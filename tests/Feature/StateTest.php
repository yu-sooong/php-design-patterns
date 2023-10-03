<?php

namespace Feature;

use PHPUnit\Framework\TestCase;
use Ting\Dp\HighBrightnessState;
use Ting\Dp\LightController;
use Ting\Dp\LowBrightnessState;
use Ting\Dp\OffState;

class StateTest extends TestCase
{
    public function test_successful()
    {
        $controller = new LightController();

        // 初始是關燈
        $this->assertInstanceOf(
            OffState::class,
            $controller->getCurrentState()
        );

        // 按下按鈕後，會切換到低亮度
        $controller->pressButton();
        $this->assertInstanceOf(
            LowBrightnessState::class,
            $controller->getCurrentState()
        );

        // 按下按鈕後，會切換到高亮度
        $controller->pressButton();
        $this->assertInstanceOf(
            HighBrightnessState::class,
            $controller->getCurrentState()
        );

        // 按下按鈕，關閉燈光
        $controller->pressButton();
        $this->assertInstanceOf(
            OffState::class,
            $controller->getCurrentState()
        );
    }
}