<?php

namespace FakerCommerce\Data;

use FakerCommerce\Faker\Helper;

final class Condition
{
    public static array $condition = [
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
        return Helper::randomize(self::$condition);
    }
}