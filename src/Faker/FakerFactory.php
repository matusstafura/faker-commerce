<?php

namespace FakerCommerce\Faker;

class FakerFactory
{
    /**
     * @return Faker
     */
    public static function create(): Faker
    {
        $defaultDataset = (new Dataset)->datasets;
        return new Faker($defaultDataset);
    }

}