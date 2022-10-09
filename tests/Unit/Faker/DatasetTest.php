<?php

use FakerCommerce\Faker\Dataset;
use FakerCommerce\Faker\Faker;

beforeEach(function () {
    $this->dataset = new Dataset();
});

it('can add custom dataset', function () {
    $this->dataset->addDataset('CustomDataset\CustomColors');

    expect($this->dataset->getDatasets())->toContain('CustomDataset\CustomColors');
});

it('cannot have same dataset multiple times', function () {
    $this->dataset->addDataset('CustomDataset\CustomColors');
    $this->dataset->addDataset('CustomDataset\CustomColors');
})->throws(\InvalidArgumentException::class);

it('cannot have same method names in dataset', function () {
    $d = $this->dataset->getDatasets();
    $methods = [
        "Custom\Attribute1" => ["color"],
        "Custom\Attribute2" => ["color"],
    ];
    $f = new Faker($d);

    $f->findDuplicateMethods($methods);
})->throws(\Exception::class);