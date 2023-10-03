<?php

namespace Feature;

use PHPUnit\Framework\TestCase;
use Ting\Dp\DigitalProductOrderProcessor;
use Ting\Dp\PhysicalProductOrderProcessor;

class OrderProcessorTest extends TestCase
{
    public function testPhysicalProductOrderProcessing()
    {
        $processor = new PhysicalProductOrderProcessor();

        // 模擬訂單處理過程
        ob_start(); // 捕獲輸出
        $processor->processOrder();
        $output = ob_get_clean(); // 獲取捕獲的輸出

        // 驗證輸出是否包含預期的內容
        $this->assertStringContainsString("Validating physical product order", $output);
        $this->assertStringContainsString("Processing payment for physical product order", $output);
        $this->assertStringContainsString("Sending shipping notification for physical product order", $output);
        $this->assertStringContainsString("Shipping physical product order", $output);
    }

    public function testDigitalProductOrderProcessing()
    {
        $processor = new DigitalProductOrderProcessor();

        // 模擬訂單處理過程
        ob_start(); // 捕獲輸出
        $processor->processOrder();
        $output = ob_get_clean(); // 獲取捕獲的輸出

        // 驗證輸出是否包含預期的內容
        $this->assertStringContainsString("Validating digital product order", $output);
        $this->assertStringContainsString("Processing payment for digital product order", $output);
        $this->assertStringContainsString("Sending download link for digital product order", $output);
    }
}