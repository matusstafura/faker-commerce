<?php

namespace FakerCommerce\Faker;

final class Faker
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

        $this->findDuplicateMethods($all);

        return $all;
    }

    public function findDuplicateMethods(array $methods): void
    {
        $duplicates = array_merge(...array_values($methods));

        if (count($duplicates) != count(array_unique($duplicates))) {
            throw new \Exception("The method with the same name already exists. Please, rename the method.");
        }
    }

}