<?php

use FakerCommerce\Data\Stock;
use FakerCommerce\FakerFactory;

it('creates a Faker instance', function() {
    $faker = FakerFactory::create();
    Stock::$stock = ['available', 'unavailable'];

    $stock = $faker->stock();

    expect($stock)->toMatch('/available|unavailable/');
});