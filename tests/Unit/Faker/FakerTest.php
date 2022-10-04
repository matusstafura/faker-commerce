<?php

use FakerCommerce\Data\Color;
use FakerCommerce\Data\Data;
use FakerCommerce\FakerFactory;

beforeEach(function() {
    $this->faker = FakerFactory::create();
});

it('throws exception if method does not exists', function () {
    $this->faker->methodLikeThisDoesNotExistAlright();
})->throws(\InvalidArgumentException::class);

it('belongs to', function () {
    $c = new Color();
    expect($c)->toBeInstanceOf(Color::class);
});