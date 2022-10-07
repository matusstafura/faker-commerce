<?php

use FakerCommerce\Faker\Dataset;

it('can add custom dataset', function () {
    $d = new Dataset();
    $d->addDataset('CustomDataset\CustomColors');

    expect($d->getDatasets())->toContain('CustomDataset\CustomColors');
});

it('cannot have same dataset multiple times', function () {
    $d = new Dataset();
    $d->addDataset('CustomDataset\CustomColors');
    $d->addDataset('CustomDataset\CustomColors');
})->throws(\InvalidArgumentException::class);