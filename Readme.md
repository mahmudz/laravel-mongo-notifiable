# Notifiable trait compatible with official laravel-mongodb package

## Installation
``` bash
composer require mahmudz/laravel-mongo-notifiable
```

## Usage

Use this `Notifiable` trait in the model instead of built in trait from laravel.

``` php
use Mahmudz\LaravelMongoNotifiable\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
}
```

## Security

If you discover any security related issues, please email [hello@mahmudz.dev](mailto:hello@mahmudz.dev) instead of using the issue tracker.

## Credits
- [Mahmudul Hasan](https://mahmudz.dev)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
