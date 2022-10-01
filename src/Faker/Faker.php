<?php

namespace Matusstafura\FakerCommerce\Faker;

use Matusstafura\FakerCommerce\Data\Condition;
use Matusstafura\FakerCommerce\Data\Stock;
use Matusstafura\FakerCommerce\Data\Color;

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