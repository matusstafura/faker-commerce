<?php

use FakerCommerce\Faker\Helper;

it('randomizes an input', function() {
    $input = [1, 2, 3, 4];
    $random = Helper::randomize($input);

    expect($input)->toContain($random)->not->toContain(5);
});

