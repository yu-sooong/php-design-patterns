<?php

namespace Ting\Dp;

class Adventure
{
    private ?FightStrategy $fightStrategy = null;

    /**
     * 攻擊
     */
    public function attack(): string
    {
        // 預設一般攻擊
        if (is_null($this->fightStrategy)) {
            $this->fightStrategy = new NormalAttack();
        }

        return $this->fightStrategy->execute();
    }

    /**
     * @param FightStrategy $fightStrategy
     * @return void
     */
    public function choiceStrategy(FightStrategy $fightStrategy): void
    {
        $this->fightStrategy = $fightStrategy;
    }
}