<?php

use Matusstafura\FakerCommerce\Faker\Helper;

it('randomizes an input', function() {
    $input = [1, 2, 3, 4];
    $faker = Helper::randomize($input);

    expect($input)->toContain($faker)->not->toContain(5);
});
