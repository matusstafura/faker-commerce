<?php

use FakerCommerce\Data\Data;

it("generates ISBN number", function () {
    $isbn = Data::isbn10();

    expect($isbn)->toBeInt()
        ->and((string)$isbn)->toHaveLength(10);
});
