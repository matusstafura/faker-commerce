<?php

namespace FakerCommerce\Data;

use FakerCommerce\Faker\Helper;

final class Stock
{
    public static array $stock = [
        "in stock",
        "out of stock"
    ];

    public function availability(): string
    {
        return Helper::randomize(self::$stock);
    }

}