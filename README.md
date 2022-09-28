# PHP Faker eCommerce

## Usage

```php
// create lang en_EN by default
$ff = FakerFaktory::create();

// breadcrumbs with separator "/" by default
$ff->breadcrumbs(4);
// 'Home / Sport / Outdoor / Jerseys'

Create Category // see table for all avalailable Categories
$ff->category('Sport');
// 'Soccer'

$ff->productName();
// 'Waterproof Printed Padded Coat'

$ff->variant('size');
// XL

$ff->price(0, 100, 'SEK');
// 34.55 SEK

$ff->stock();
// 'out of stock'
```

## License

## Contribution

## Support
