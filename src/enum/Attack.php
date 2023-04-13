<?php

namespace Ting\Dp\enum;

enum Attack: string
{
    case Normal = '一般攻擊';

    case Skill = '技能攻擊';

    case Item = '道具攻擊';
}
