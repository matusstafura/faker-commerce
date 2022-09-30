<?php

namespace Matusstafura\FakerCommerce\Faker;

final class Helper
{
    /**
     * @param array $field
     * @return string|int
     */
    public static function randomize(array $field): string|int
    {
        $rand = array_rand($field);
        return $field[$rand];
    }
}