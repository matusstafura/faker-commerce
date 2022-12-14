<?php

namespace FakerCommerce\Faker;

final class Helper
{
    /**
     * @param array<int|string> $field
     * @return string|int
     */
    public static function randomize(array $field): string|int
    {
        $rand = array_rand($field);
        return $field[$rand];
    }

    public static function randomNumber(int $min, int $max): int
    {
        return mt_rand($min, $max);
    }
}