# 裝飾者模式 decorator

**目的 : 在系統上要擴充功能，我們會用繼承。但由於繼承耦合度高，且隨著擴充功能增加，子類別會越多，不易於維護。若使用組合關係的話，則可保持原本結構，且同時達到擴充的目的**

---
### 例子: 當角色獲得不同的稱號時而會有新技能 🤭

定義了一個 Title 抽象類別，實作 冒險者(Adventurer) 攻擊方式，並提供物件動態增加職稱  
實作敏捷(TitleAgile)、火焰(TitleFire)、強狀(TitleStrong)稱號別並加上新技能  

- 獲得敏捷稱號會有新技能 useFlash (瞬間移動)🏃🏻💨
- 獲得火焰稱號會有新技能 fireball (火球)🔥🔥
- 獲得強壯稱號不會有新技能 但已經有強裝的稱號加持(精神上加持🤣🤣)

---
![類別圖](https://raw.githubusercontent.com/yu-sooong/ting-image/main/php-desing-patterns/decorator.drawio.png)

---
### 測試


```php
        // 一開始沒有稱任何 "稱號" 的冒險者
        $lancer = new Lancer("Ting");
        $name = $lancer->getName();

        echo "---我是一般冒險者，$name---\n";

        // 只有一般的長槍攻擊
        $this->assertTrue("長槍攻擊" === $lancer->attack());

        echo "\n";
        // 獲得強壯稱號的 Ting
        echo "\n---獲得強壯稱號的 Ting---";
        $hasStrongAdventurer = new TitleStrong($lancer);
        // 這時候的冒險者已經有 "強壯" 加持
        $hasStrongAdventurer->attack();

        echo "\n";
        echo "\n---獲得敏捷稱號的 Ting---";
        $hasAgileAdventurer = new TitleAgile($hasStrongAdventurer);
        $hasAgileAdventurer->attack();
        $hasAgileAdventurer->useFlash();

        echo "\n";
        echo "\n---獲得燃燒稱號的 Ting---";
        $hasAgileAdventurer = new TitleFire($hasAgileAdventurer);
        $hasAgileAdventurer->attack();
        $hasAgileAdventurer->fireball();

        echo "\n";
        echo "\n稱號可以重複，只是我目前的稱號是強壯並沒有燃燒的特殊技能 '火球' 夠使用";
        echo "\n---獲得非常強壯稱號的 Ting---";
        $hadStrong = new TitleStrong($hasAgileAdventurer);
        $hadStrong->attack();
```

