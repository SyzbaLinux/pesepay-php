<?php

namespace Emmanuelsiziba\Payments;

class Amount
{
    public $amount;
    public $currencyCode;

    function __construct($amount, $currencyCode)
    {
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
    }
}
