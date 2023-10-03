<?php

namespace Ting\Dp;

class ProxyImage implements Image
{
    private $realImage;
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }


    public function display()
    {
        if (!$this->realImage) {
            $this->realImage = new RealImage($this->url);
            $this->realImage->loadImageFromWeb();
        }
        $this->realImage->display();
    }
}