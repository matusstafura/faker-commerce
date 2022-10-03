<?php

namespace FakerCommerce\Data;

class Condition extends Data
{
    protected static array $condition = [
        "New",
        "New other (see details)",
        "New with defects",
        "Certified - Refurbished",
        "Excellent - Refurbished",
        "Very Good - Refurbished",
        "Good - Refurbished",
        "Seller refurbished",
        "Like New",
        "Used",
        "Very Good",
        "Good",
        "Acceptable",
        "For parts or not working",
    ];

    public function condition(): string
    {
        return self::randomize(self::$condition);
    }
}