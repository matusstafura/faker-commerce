<?php

namespace Matusstafura\FakerCommerce\Faker;

use Matusstafura\FakerCommerce\Data\Stock;

class Faker
{
    public function stock(): string
    {
        return Helper::randomize(Stock::$stock);
    }

}