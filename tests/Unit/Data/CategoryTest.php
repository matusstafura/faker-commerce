<?php

use FakerCommerce\Data\Category;

it("generates breadcrumbs", function() {
    $category = new Category();
    $breadcrumbs = $category->breadcrumbs(4, ">");

    expect($breadcrumbs)->toContain(">")
        ->and($breadcrumbs)->toBeString()
        ->and($breadcrumbs)->toMatch('/^(.*?>){3}.*$/i');
});
