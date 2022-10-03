<?php

namespace FakerCommerce\Data;

use FakerCommerce\Faker\Helper;

abstract class Data
{
    public function randomize($arg): int|string
    {
        return Helper::randomize($arg);
    }

}
