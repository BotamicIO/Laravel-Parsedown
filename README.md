# Laravel Parsedown

## Installation

First, pull in the package through Composer.

```js
composer require draperstudio/laravel-parsedown:1.0.*@dev
```

And then, if using Laravel 5, include the service provider within `app/config/app.php`.

```php
'providers' => [
    // ... Illuminate Providers
    // ... App Providers
    DraperStudio\Parsedown\ServiceProvider::class
];
```

And, for convenience, add a facade alias to this same file at the bottom:

```php
'aliases' => [
    // ... Illuminate Facades
    'Parsedown' => DraperStudio\Parsedown\Facades\Parsedown::class
];
```

## License

Laravel Parsedown is licensed under [The MIT License (MIT)](LICENSE).
