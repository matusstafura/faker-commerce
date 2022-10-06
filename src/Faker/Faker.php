<?php

namespace FakerCommerce\Faker;

class Faker
{

    public function __construct(public array $datasets)
    {
    }

    public function __call(string $method, array $attributes)
    {
        if ($this->findMethod($method) !== null) {
            $class = key($this->findMethod($method));
            return (new $class)->$method(...$attributes);
        }
    }

    /**
     * @param string $arg
     * @return array
     */
    function findMethod(string $arg): array
    {
        foreach ($this->datasets as $class) {
            if (method_exists($class, $arg)) {
                $match[$class] = $arg;
                return $match;
            }
        }

        throw new \InvalidArgumentException(sprintf('Method: "%s" not found', $arg));
    }

    function getAllMethods(): array
    {
        $all = [];
        foreach ($this->datasets as $class) {
            $all[$class] = get_class_methods($class);
        }

        return $all;
    }

}