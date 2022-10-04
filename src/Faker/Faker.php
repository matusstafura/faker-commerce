<?php

namespace FakerCommerce\Faker;

class Faker
{
    public array $datasets = ['Color', 'Condition', 'Stock', 'Payment'];

    public const DATASET_NAMESPACE = 'FakerCommerce\\Data\\';

    public function __call(string $method, array $attributes)
    {
        if ($this->findMethod($method) !== null) {
            $class = key($this->findMethod($method));
            return (new $class)->$method();
        }
    }

    /**
     * @param string $arg
     * @return array
     */
    function findMethod(string $arg): array
    {
        foreach ($this->datasets as $class) {
            $full = self::DATASET_NAMESPACE . $class;
            if (method_exists($full, $arg)) {
                $match[$full] = $arg;
                return $match;
            }
        }

        throw new \InvalidArgumentException(sprintf('Method: "%s" not found', $arg));
    }

}