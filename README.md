# Laravel Parsedown

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require draperstudio/laravel-parsedown
```

And then, if using Laravel 5, include the service provider within `app/config/app.php`.

``` php
'providers' => [
    // ... Illuminate Providers
    // ... App Providers
    DraperStudio\Parsedown\ServiceProvider::class
];
```

And, for convenience, add a facade alias to this same file at the bottom:

``` php
'aliases' => [
    // ... Illuminate Facades
    'Markdown' => DraperStudio\Parsedown\Facades\Parsedown::class
];
```

## Usage

``` php
Markdown::text('Hello _Parsedown_!') # <p>Hello <em>Parsedown</em>!</p>
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hello@draperstudio.tech instead of using the issue tracker.

## Credits

- [DraperStudio][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/DraperStudio/laravel-parsedown.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/DraperStudio/laravel-parsedown/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/DraperStudio/laravel-parsedown.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/DraperStudio/laravel-parsedown.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/DraperStudio/laravel-parsedown.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/DraperStudio/laravel-parsedown
[link-travis]: https://travis-ci.org/DraperStudio/laravel-parsedown
[link-scrutinizer]: https://scrutinizer-ci.com/g/DraperStudio/laravel-parsedown/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/DraperStudio/laravel-parsedown
[link-downloads]: https://packagist.org/packages/DraperStudio/laravel-parsedown
[link-author]: https://github.com/DraperStudio
[link-contributors]: ../../contributors
