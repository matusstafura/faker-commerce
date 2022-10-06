# PHP Faker eCommerce

## Usage

```php

use FakerCommerce\Faker\FakerFactory;

// Use a factory to initialize
$faker = FakerFactory::create();

$faker->condition();
// "Very Good"

$faker->stock();
// "out of stock"

$faker->category();
// "Action Figures"

$faker->payment();
// "cash on delivery"

$faker->breadcrumbs(4, ">");
// "Radio>Instruments>Materials & Supplies>Accessories"

```

## Tests

Run the tests with Pest PHP

```shell
./vendor/bin/pest
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Contribution

Contributions are welcome and will be fully credited. Please, add tests if required.

## Support

## Security

If you discover any security-related issues, please email us instead of using the issue tracker.

## TODO

Please see TODO.md file.
