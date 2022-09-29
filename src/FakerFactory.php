<?php

namespace Matusstafura\FakerCommerce;

use Matusstafura\FakerCommerce\Faker\Faker;

class FakerFactory
{
    public static function create()
    {
        return new Faker();
    }

}