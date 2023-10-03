<?php

namespace Feature;

use PHPUnit\Framework\TestCase;
use Ting\Dp\ProxyImage;

class ProxyTest extends TestCase
{
    public function test_successful()
    {
        $ImgName1 = "image1.jpg";
        $ImgName2 = "image2.jpg";
        // 客戶端程式碼
        $image1 = new ProxyImage($ImgName1);
        $image2 = new ProxyImage($ImgName2);

        // 模擬載入圖像
        ob_start(); // 捕獲輸出
        $image1->display(); // 從網絡加載圖片：image1.jpg顯示圖片：image1.jpg
        $output = ob_get_clean(); // 獲取捕獲的輸出

        $this->assertStringContainsString("從網絡加載圖片：{$ImgName1}顯示圖片：$ImgName1", $output);

        ob_start(); // 捕獲輸出
        $image1->display();
        $output = ob_get_clean(); // 獲取捕獲的輸出

        // 這時因為已經載入過了，所以直接顯示圖片，不需要從網路加載圖片
        $this->assertStringContainsString("顯示圖片：$ImgName1", $output);

        $this->assertTrue(true);
    }
}