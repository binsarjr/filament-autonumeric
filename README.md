# This is library Wrapper in Filament for Autonumeric.js

[![Latest Version on Packagist](https://img.shields.io/packagist/v/binsarjr/filament-autonumeric.svg?style=flat-square)](https://packagist.org/packages/binsarjr/filament-autonumeric)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/binsarjr/filament-autonumeric/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/binsarjr/filament-autonumeric/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/binsarjr/filament-autonumeric/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/binsarjr/filament-autonumeric/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/binsarjr/filament-autonumeric.svg?style=flat-square)](https://packagist.org/packages/binsarjr/filament-autonumeric)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require binsarjr/filament-autonumeric
```



## Usage

```php
Autonumeric::make('nominal')
    ->columnSpanFull()
    ->label('Jumlah (IDR)')
    ->allowDecimalPadding('floats')
    ->digitGroupSeparator('.')
    ->decimalCharacter(',')
    ->suffix('IDR')
    ->decimalPlaces(2)
    ->currencySymbol('Rp.')
    ->currencySymbolPlacement(CurrencySymbolPlacement::Prefix)
    ->required()
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Binsar Dwi Jasuma](https://github.com/binsarjr)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
