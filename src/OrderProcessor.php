<?php

namespace Ting\Dp;

abstract class OrderProcessor
{
    public final function processOrder(): void
    {
        $this->validateOrder();
        $this->processPayment();
        $this->sendNotification();
        $this->shipOrder();
    }

    abstract protected function validateOrder();

    abstract protected function processPayment();

    abstract protected function sendNotification();

    abstract protected function shipOrder();

}
