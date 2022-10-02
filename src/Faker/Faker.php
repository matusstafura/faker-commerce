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
        return Helper::randomize(Color::$colors);
    }

    // WIP
    public function __call($method, $attributes)
    {
        $class = '\\FakerCommerce\\Data\\'.$this->allClasses()[$method];
        return (new $class)->$method();
    }

    // WIP

    public function allClasses()
    {
        $classes = ['Color', 'Condition', 'Stock'];
        $x = [];

        foreach ($classes as $cl) {
            $y = get_class_methods('FakerCommerce\\Data\\' . $cl);
            foreach ($y as $yy) {
                $x[$yy] = $cl;
            }
        }

        return $x;
    }
}