<?php

namespace FakerCommerce\Faker;

class Dataset
{
    private array $datasets = [
        'FakerCommerce\Data\Color',
        'FakerCommerce\Data\Category',
        'FakerCommerce\Data\Condition',
        'FakerCommerce\Data\Payment',
        'FakerCommerce\Data\Stock',
    ];

    public function addDataset(string $dataset): void
    {
        if (in_array($dataset, $this->datasets)) {
            throw new \InvalidArgumentException("Dataset already exists.");
        }

        $this->datasets[] = $dataset;
    }

    public function getDatasets(): array
    {
        return $this->datasets;
    }

}