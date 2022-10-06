<?php

namespace FakerCommerce\Faker;

class FakerFactory
{
    /**
     * @return Faker
     */
    public static function create(): Faker
    {
        return new Faker();
    }

}