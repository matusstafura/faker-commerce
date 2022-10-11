<?php

namespace FakerCommerce\Faker;

class FakerFactory
{
    /**
     * @return Faker
     */
    public static function create(): Faker
    {
        $datasets = (new Dataset)->getDatasets();
        return new Faker($datasets);
    }

}
