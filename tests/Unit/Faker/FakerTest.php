<?php

use Matusstafura\FakerCommerce\Data\Stock;
use Matusstafura\FakerCommerce\FakerFactory;

it('creates a Faker instance', function() {
    $faker = FakerFactory::create();
    Stock::$stock = ['available', 'unavailable'];

    $stock = $faker->stock();

    expect($stock)->toMatch('/available|unavailable/');
});