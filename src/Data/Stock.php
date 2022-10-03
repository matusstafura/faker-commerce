<?php

namespace FakerCommerce\Data;

class Stock extends Data
{
    public static array $stock = [
        "in stock",
        "out of stock"
    ];

    public function availability(): string
    {
        return self::randomize(self::$stock);
    }

}