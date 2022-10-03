<?php

namespace FakerCommerce\Faker;

class Faker
{
    public array $datasets = ['Color', 'Condition', 'Stock'];

    public const DATASET_NAMESPACE = 'FakerCommerce\\Data\\';

    public function __call($method, $attributes)
    {
        if ($this->findMethod($method) !== null) {
            $class = key($this->findMethod($method));
            return (new $class)->$method();
        }
    }

    function findMethod($arg): array
    {
        foreach ($this->datasets as $class) {
            $full = self::DATASET_NAMESPACE . $class;
            if (method_exists($full, $arg)) {
                $match[$full] = $arg;
                return $match;
            }
        }

        throw new \InvalidArgumentException(sprintf('method "%s" not found', $arg));
    }

}