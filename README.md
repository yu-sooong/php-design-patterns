# 狀態模式 State

### 目的 :
- **封裝狀態行為**：狀態模式可以將每種狀態封裝到一個單獨的類別中、使得能更模組化易維護
- **消除大量的條件語句**: 有助於消除大量的條件、透過封裝狀態類別能減少複查的條件分支
- **增加可擴展性**: 狀態模式使得添加新的狀態及行為變得容易、可清算創建新的狀態類別
- **提高可讀性**: 封裝後的程式碼更易於理解維護
- **使狀態轉換可控**: 狀態模式下可確保狀態轉換是有限、可控制、因為每個狀態對象知道可轉到哪些狀態、避免不合法的狀態切換

---
### 例子: 使用了 低亮度 高亮度 關閉三種狀態來表示情境 🤭

定義了一個 State 介面，實作 關燈(OffState)、低亮度(LowBrightnessState)、高亮度(LowBrightnessState)  
在使用一個燈泡控制器測試控制(LightController)

- 每個狀態類別實作 nextMode(模式) 方法
- 在 OffState 實作 nextMode 則是 切換到低亮度
- 在 LowBrightnessState 實作 nextMode 則是 切換到高亮度
- 在 HighBrightnessState 實作 nextMode 則是 切換到關燈
- LightController 實作按鈕動作預設關燈動作

---
![類別圖](https://raw.githubusercontent.com/yu-sooong/ting-image/main/php-desing-patterns/state.drawio.png)

---
### 測試


```php
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
```

