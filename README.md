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

You need to publish the assets after installation
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

This command still in dev:
``` php
php artisan template:install --routes --auth --home 
```

## Usage

Just extends the view that you want to use between **_main_**, **_login_**, **_register_**, **_password.reset_**, **_password.confirm_** and **_password.email_**:
``` php
@extends('template::lte.main')
```

And the sections are:
``` php
@section('pageTitle','test')

@section('content')

@endsection
```

And also you can use Blade component to generate inputs like:
``` php
<x-lte-field-input type="" label="" name="" icon="" required/>
<x-lte-field-textarea label="" name="" icon="" required/>
<x-lte-field-password label="" name="" icon="" required/>
<x-lte-field-checkbox label="" name=""/>
```
### Features

#### Profile

To enable profile feature you need to publish the **ProfileController** first,
``` php
php artisan vendor:publish --tag template-profile-controller
```

then register the following **routes**:

``` php
Route::get('/profile', 'Auth\ProfileController@index')->name('profile.index');
Route::put('/profile', 'Auth\ProfileController@update')->name('profile.update');
Route::put('/profile/updatePassword', 'Auth\ProfileController@updatePassword')->name('profile.updatePassword');
```

Finally you can enable the feature from _**template.php**_ config file

``` php
'routes' => [
    'profile' => [
        'enabled' => true,
    ],
],
```

Also you can update profile routes by changing the following fields:

``` php
'routes' => [
    'profile' => [
        'index' => 'profile.index',
        'update' => 'profile.update',
        'updatePassword' => 'profile.updatePassword'
    ],
],
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

If you discover any security related issues, please email [aminetiyal@gmail.com](mailto:aminetiyal@gmail.com) instead of using the issue tracker.

## Credits

- [Amine TIYAL](https://github.com/aminetiyal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
