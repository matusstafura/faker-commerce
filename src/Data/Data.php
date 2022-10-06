<?php

namespace FakerCommerce\Data;

use FakerCommerce\Faker\Helper;

abstract class Data
{
    /**
     * @param array<int|string> $arg
     * @return int|string
     */
    protected static function randomize(array $arg): int|string
    {
        return Helper::randomize($arg);
    }

}
