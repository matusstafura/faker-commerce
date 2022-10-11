<?php

namespace FakerCommerce\Faker;

class Dataset
{
    private static array $datasets = [
        'FakerCommerce\Data\Category',
        'FakerCommerce\Data\Color',
        'FakerCommerce\Data\Condition',
        'FakerCommerce\Data\Name',
        'FakerCommerce\Data\Payment',
        'FakerCommerce\Data\Price',
        'FakerCommerce\Data\Stock',
    ];

    public function addDataset(string $dataset): void
    {
        if (in_array($dataset, self::$datasets)) {
            throw new \InvalidArgumentException("Dataset already exists.");
        }

        self::$datasets[] = $dataset;
    }

    public function getDatasets(): array
    {
        return self::$datasets;
    }

}
