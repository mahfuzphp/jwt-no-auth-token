# 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mahfuzrh/jwt-no-auth-token.svg?style=flat-square)](https://packagist.org/packages/mahfuzrh/jwt-no-auth-token)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mahfuzrh/jwt-no-auth-token/run-tests?label=tests)](https://github.com/mahfuzrh/jwt-no-auth-token/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/mahfuzrh/jwt-no-auth-token.svg?style=flat-square)](https://packagist.org/packages/mahfuzrh/jwt-no-auth-token)

no auth token based on key, for use as application key. 

## Installation

You can install the package via composer:

```bash
composer require mahfuzrh/jwt-no-auth-token
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Mahfuzrh\JwtNoAuthToken\JwtNoAuthTokenServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$jwt-no-auth-token = new Mahfuzrh\JwtNoAuthToken();
echo $jwt-no-auth-token->encode();
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mahfuz Ur Rahman](https://github.com/mahfuzphp)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
