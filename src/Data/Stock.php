<?php

namespace FakerCommerce\Data;

use FakerCommerce\Faker\Helper;

final class Stock
{
    public static array $stock = [
        "in stock",
        "out of stock"
    ];

    public function availability()
    {
        return Helper::randomize(self::$stock);
    }

    public function dump()
    {
        return "DUMP";
    }
}