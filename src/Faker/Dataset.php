<?php

namespace FakerCommerce\Faker;

class Dataset
{
    public array $datasets = [
        'FakerCommerce\Data\Color',
        'FakerCommerce\Data\Category',
        'FakerCommerce\Data\Color',
        'FakerCommerce\Data\Condition',
        'FakerCommerce\Data\Payment',
        'FakerCommerce\Data\Stock',
    ];

    public function addDataset($dataset): void
    {
        $this->datasets[] = $dataset;
    }

}