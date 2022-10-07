<?php

use FakerCommerce\Data\Category;
use FakerCommerce\Data\Data;
use FakerCommerce\Faker\FakerFactory;

beforeEach(function() {
    $this->faker = FakerFactory::create();
});

it('throws exception if method does not exists', function () {
    $this->faker->methodLikeThisDoesNotExistAlright();
})->throws(\InvalidArgumentException::class);

it('concrete faker class is instance of base class', function () {
    $c = new Category();
    expect($c)->toBeInstanceOf(Data::class);
});