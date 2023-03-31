# 簡單工廠模式 Simple Factory

**目的 : 定義一個簡單工廠 ，傳入不同的參數取得不同的類別物件**

---
# 首先， 從新手村開始 🤭

簡單工廠模式是一種管理物件創建的模式，隨著輸入參數不同，回傳不同的物件

只要專注於傳入正確的參數，不需理會物件實際產生的過程

現在要設計一個訓練冒險者 Adventurer 的訓練營 TrainingCamp

可訓練的種類有弓箭手 Archer、戰士 Warrior。

訓練營就是我們的簡單工廠（Simple Factory），冒險者就是我們產生類別(物件)

如果有人要招募冒險者只要跟訓練營說聲請幫我訓練即可、不用理會訓練過程。

如果要訓練一種新型態的冒險者，魔法師 magician 只要在 trianAventurer 方法內增加 switch case 即可。

不過直接修改 TrainingCamp 違反了開放/封閉原則、不能算是一個很健全的設計模式

---


![類別圖](https://raw.githubusercontent.com/yu-sooong/design-patterns-php/feature/ting/simple_factory/simple_factory.png "simple_factory")
