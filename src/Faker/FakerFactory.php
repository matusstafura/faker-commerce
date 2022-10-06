<?php

namespace FakerCommerce\Faker;

class FakerFactory
{
    /**
     * @return Faker
     */
    public static function create(): Faker
    {
        $datasets = [
            'FakerCommerce\Data\Color',
            'FakerCommerce\Data\Category',
            'FakerCommerce\Data\Color',
            'FakerCommerce\Data\Condition',
            'FakerCommerce\Data\Payment',
            'FakerCommerce\Data\Stock',
        ];

        return new Faker($datasets);
    }

}