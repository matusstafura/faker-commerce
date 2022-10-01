<?php

namespace Matusstafura\FakerCommerce;

use Matusstafura\FakerCommerce\Faker\Faker;

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