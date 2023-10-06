# 代理模式 Proxy

**目的 : 通常用於控制對某個物件的訪問。在實際應用中，Proxy 可以用來實現快取、遠程代理、保護代理等功能**

### 情境
- 將軍出席敵國餐宴時，找一個代理人(長得很像的)、若這時候遇到了鴻門宴、本體也會沒事
- 出差工作了需要找一個職務代理人，此代理人可以先做初步的決定

---
### 例子: 圖片加載的情境來說明 🤭

有三個類別：

- Image（主題）：定義了 RealImage 和 Proxy 的共同介面，可以是一個抽象類別或介面。  
- RealImage（真實主題）：實際執行工作的類別。  
- ProxyImage（代理）：控制對 RealImage 的訪問，可以執行額外的工作，例如快取或權限檢查。  

---
![類別圖](https://raw.githubusercontent.com/yu-sooong/ting-image/main/php-desing-patterns/proxy.drawio.png)

---
### 測試
因為我們使用了 ProxyImage 做代理在第一次獲取圖片時會從網路上加載，第二次就會直接顯示
使情景很適合使用快取的機制保護本體

```php
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
```

