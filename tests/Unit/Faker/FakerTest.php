<?php

use FakerCommerce\FakerFactory;

beforeEach(function() {
    $this->faker = FakerFactory::create();
});

it('throws exception if method does not exists', function () {
    $this->faker->methodLikeThisDoesNotExistAlright();
})->throws(\InvalidArgumentException::class);