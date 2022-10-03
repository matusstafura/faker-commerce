<?php

namespace FakerCommerce\Data;

use FakerCommerce\Faker\Helper;

abstract class Data
{
    /**
     * @param array<int|string> $arg
     * @return int|string
     */
    public static function randomize(array $arg): int|string
    {
        return Helper::randomize($arg);
    }

    public static function isbn10()
    {
        return Helper::randomNumber(1111111111,9999999999);
    }
}
