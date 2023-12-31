# Description
CartonBoxGuard is a cutting-edge Laravel package designed to revolutionize the accuracy of carton box content management. Ensuring the correct items are packed within carton boxes is essential for businesses that handle the shipping and distribution of products. Accidental errors can result in costly returns, customer dissatisfaction, and logistical nightmares. CartonBoxGuard is here to put an end to these issues.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/teresa/carton-box-guard.svg?style=flat-square)](https://packagist.org/packages/teresa/carton-box-guard)
[![Total Downloads](https://img.shields.io/packagist/dt/teresa/carton-box-guard.svg?style=flat-square)](https://packagist.org/packages/teresa/carton-box-guard)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/carton-box-guard.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/carton-box-guard)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require teresa/carton-box-guard
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="carton-box-guard-config"
```

This is the contents of the published config file:

```php
return [
    'carton' => [
        'model' => '',
        'table_name' => 'carton_boxes',
    ],
    'polybag' => [
        'model' => '',
        'table_name' => 'polybags',
    ],
    'database_connection' => 'teresa_box',
];
```

Add CartonBoxGuardServiceProvider on your config/app.php

```php
\Teresa\CartonBoxGuard\Providers\CartonBoxGuardServiceProvider::class,
```


## Usage

```php
$cartonBoxGuard = new Teresa\CartonBoxGuard();
echo $cartonBoxGuard->echoPhrase('Hello, Teresa!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Faisal Yusuf](https://github.com/xBigDaddyx)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
