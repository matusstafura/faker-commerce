<?php

namespace FakerCommerce\Data;

use FakerCommerce\Faker\Helper;

class Price extends Data
{
    /**
     * @param int $min
     * @param int $max
     * @param int $decimals
     * @return string
     */
    public function price(int $min = 0, int $max = 1_000, int $decimals = 2): string
    {
        $amount = Helper::randomNumber($min, $max);
        return number_format($amount, $decimals, ".", ",");
    }

}