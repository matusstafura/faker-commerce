<?php

namespace Matusstafura\FakerCommerce\Faker;

class Helper
{
    /**
     * @param array $field
     * @return string
     */
    public static function randomize(array $field)
    {
        $rand = array_rand($field);
        return $field[$rand];
    }
}