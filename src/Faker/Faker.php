<?php

namespace Matusstafura\FakerCommerce\Faker;

use Matusstafura\FakerCommerce\Data\Stock;

class Faker
{
    public function stock(): string
    {
        $stock = Stock::$stock;
        $rand = array_rand(Stock::$stock);
        return $stock[$rand];
    }
}