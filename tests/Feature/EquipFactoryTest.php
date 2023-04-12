<?php

namespace Feature;

use PHPUnit\Framework\TestCase;
use Ting\Dp\Archer\ArcherEquipFactory;
use Ting\Dp\Archer\ArcherTrainingCamp;
use Ting\Dp\Warrior\WarriorEquipFactory;
use Ting\Dp\Warrior\WarriorTrainingCamp;

class EquipFactoryTest extends TestCase
{
    public function test_the_equip_factory_successful()
    {
        // 弓箭手生產裝備
        $equipFactory = new ArcherEquipFactory();

        // 生產弓箭手皮甲
        $archerLeather = $equipFactory->productClothes();

        // 生產弓箭手武器
        $archerBow = $equipFactory->productWeapon();

        // 預期皮甲防禦力為 20
        $this->assertEquals(20, $archerLeather->getDef());

        // 預期弓箭攻擊距離為 180
        $this->assertEquals(180, $archerBow->getRanger());

        // 預期弓箭攻擊力為 15
        $this->assertEquals(15, $archerBow->getAlk());

        //--------------------------------------------------------------

        // 戰士生產裝備
        $equipFactory = new WarriorEquipFactory();

        // 生產戰士盔甲
        $warriorArmor = $equipFactory->productClothes();

        // 生產戰士武器
        $warriorLongSword = $equipFactory->productWeapon();

        // 預期盔甲防禦力為 25
        $this->assertEquals(25, $warriorArmor->getDef());

        // 預期長劍攻擊距離為 50
        $this->assertEquals(50, $warriorLongSword->getRanger());

        // 預期長劍攻擊力為 25
        $this->assertEquals(25, $warriorLongSword->getAlk());

        // 戰士訓練營
        $warriorCamp = new WarriorTrainingCamp();

        // 弓箭手訓練營
        $archerCamp = new ArcherTrainingCamp();

        // 訓練冒險者(弓箭手)並且顯示資訊
        $archerCamp->trainAdventurer()->display();

        // 訓練冒險者(戰士)並且顯示資訊
        $warriorCamp->trainAdventurer()->display();
    }
}
