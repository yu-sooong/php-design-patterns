<?php

namespace Ting\Dp;

class PhysicalProductOrderProcessor extends OrderProcessor
{

    protected function validateOrder()
    {
        echo "Validating physical product order\n";
    }

    protected function processPayment()
    {
        echo "Processing payment for physical product order\n";
    }

    protected function sendNotification()
    {
        echo "Sending shipping notification for physical product order\n";
    }

    protected function shipOrder()
    {
        echo "Shipping physical product order\n";
    }
}