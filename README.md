# Laravel Template

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aminetiyal/laravel-template.svg?style=flat-square)](https://packagist.org/packages/aminetiyal/laravel-template)
[![Build Status](https://img.shields.io/travis/aminetiyal/laravel-template/master.svg?style=flat-square)](https://travis-ci.org/aminetiyal/laravel-template)
[![Quality Score](https://img.shields.io/scrutinizer/g/aminetiyal/laravel-template.svg?style=flat-square)](https://scrutinizer-ci.com/g/aminetiyal/laravel-template)
[![Total Downloads](https://img.shields.io/packagist/dt/aminetiyal/laravel-template.svg?style=flat-square)](https://packagist.org/packages/aminetiyal/laravel-template)

This package provide an easy way to use the most popular OpenSource templates on your Laravel Application.

For now this package support only [AdminLte 3.0](https://github.com/ColorlibHQ/AdminLTE) template, but more templates will be added later.

## Installation

You can install the package via composer:

```bash
composer require aminetiyal/laravel-template
```

## Usage

To start using the AdminLte template, you need to publish the assets first
``` php
php artisan vendor:publish --tag template-adminlte-assets
```

Then publish the config file to edit **routes** and **menus**
``` php
php artisan vendor:publish --tag template-config
```

You can edit **views** and **lang** files after publish
``` php
php artisan vendor:publish --tag template-adminlte-views
php artisan vendor:publish --tag template-lang
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email test@yopmail.com instead of using the issue tracker.

## Credits

- [Amine TIYAL](https://github.com/aminetiyal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
