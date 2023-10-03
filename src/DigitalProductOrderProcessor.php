<?php

namespace Ting\Dp;

class DigitalProductOrderProcessor extends OrderProcessor
{

    protected function validateOrder()
    {
        echo "Validating digital product order\n";
    }

    protected function processPayment()
    {
        echo "Processing payment for digital product order\n";
    }

    protected function sendNotification()
    {
        echo "Sending download link for digital product order\n";
    }

    protected function shipOrder()
    {
        // 數位商品不需要發貨
    }
}