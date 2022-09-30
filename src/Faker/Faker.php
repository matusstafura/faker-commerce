<?php

namespace Matusstafura\FakerCommerce\Faker;

use Matusstafura\FakerCommerce\Data\Condition;
use Matusstafura\FakerCommerce\Data\Stock;

class Faker
{
    /**
     * @return string
     */
    public function stock(): string
    {
        return Helper::randomize(Stock::$stock);
    }

    /**
     * @return string
     */
    public function condition(): string
    {
        return Helper::randomize(Condition::$condition);
    }

}