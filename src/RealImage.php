<?php

namespace Ting\Dp;

class RealImage implements Image
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function display()
    {
        echo "顯示圖片：{$this->url}";
    }

    public function loadImageFromWeb()
    {
        echo "從網絡加載圖片：{$this->url}";
    }
}