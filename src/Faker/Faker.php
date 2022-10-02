<?php

namespace FakerCommerce\Faker;

use FakerCommerce\Data\Color;
use FakerCommerce\Data\Condition;
use FakerCommerce\Data\Stock;

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

    /**
     * @return string
     */
    public function color(): string
    {
        return Helper::randomize(Color::$color);
    }

    // WIP
    public function __call($method, $attributes)
    {
        return $this->getClass($method);
    }

    // WIP
    public function getClass($arg)
    {
        $c = "\Matusstafura\FakerCommerce\Data\\$arg";
        return Helper::randomize($c::$condition);
    }

}