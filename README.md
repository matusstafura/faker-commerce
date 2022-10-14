# PHP Faker eCommerce

Generates dummy data related mostly for ecommerce use.

## Install the package
```shell
composer require matusstafura/faker-commerce
```

## Usage

```php

use FakerCommerce\Faker\FakerFactory;

// Use a factory to initialize
$faker = FakerFactory::create();

$faker->availability();
// "out of stock"

$faker->breadcrumbs(4, ">");
// "Radio>Instruments>Materials & Supplies>Accessories"

$faker->category();
// "Action Figures"

$faker->color();
// "Coral"

$faker->condition();
// "Very Good"

$faker->name();
// leather shorts

$faker->payment();
// "cash on delivery"

$faker->price();
// "557.00"

$faker->review();
// "Expensive for the quality."

$f->getAllMethods();
// lists all available methods

```

## Tests

Run the tests with Pest PHP

```shell
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

## Contribution

Contributions are welcome and will be fully credited. Please, add tests if required.

## Support

You can leave a star.

## Security

If you discover any security-related issues, please email us instead of using the issue tracker.

## TODO

Please see TODO.md file.
