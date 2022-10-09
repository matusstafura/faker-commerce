<?php

use FakerCommerce\Data\Price;

it("get formatted price", function() {
    $p = new Price();
    $getPrice = $p->price(1,20);

    expect($getPrice)->toBeString()->toMatch('/\d+[.]00/');
});
