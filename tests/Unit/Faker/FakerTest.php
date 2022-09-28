<?php

use Matusstafura\FakerCommerce\Faker\Faker;

it('creates a Faker instance', function() {
    $f = new Faker();

    $stock = $f->stock();

    expect($stock)->toBe('out of stock');
});