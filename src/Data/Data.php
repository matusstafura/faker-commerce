<?php

namespace FakerCommerce\Data;

use FakerCommerce\Faker\Helper;

abstract class Data
{
    /**
     * @param array<int|string> $arg
     * @return int|string
     */
    public function randomize(array $arg): int|string
    {
        return Helper::randomize($arg);
    }

}
