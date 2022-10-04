<?php

use FakerCommerce\Data\Data;

it("gets random element from an array", function () {
    $arr = [1,2,3];

    $random = Data::randomize($arr);

    expect($arr)->toContain($random)->not()->toContain(4);
});
