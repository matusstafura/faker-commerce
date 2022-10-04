<?php

namespace FakerCommerce\Data;

class Payment extends Data
{
    protected static array $payment =
        [
            "credit card", "cheque", "money order", "cash on delivery", "debit card", "cryptocurrency", "wire transfer",
            "gift card"
        ];

    public function payment(): string
    {
        return self::randomize(self::$payment);
    }
}