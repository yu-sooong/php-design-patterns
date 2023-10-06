# 樣板模式 template

### 目的 :
- 是一種行為設計模式、定義操作中算法的骨架、而將一些步驟延遲到子類別中  
- 樣板模式允許子類再不改變算法結構的情況下重新定義算法的某些步驟

---
![類別圖](https://raw.githubusercontent.com/yu-sooong/ting-image/main/php-desing-patterns/template.png)

---

### 實作 :
### 數位產品別與實體產品類別中、數位不需要實作出貨方法
- PhysicalProductOrderProcessor 實作所有步驟 validateOrder()、processPayment()、sendNotification()、shipOrder()
- DigitalProductOrderProcessor 不需要實作 shipOrder()
- 樣板模式允許子類再不改變算法結構的情況下重新定義算法的某些步驟
  
---

### 測試
```php
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
```

