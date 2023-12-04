# Laravel Pulse - About Application

[![Latest Version on Packagist](https://img.shields.io/packagist/v/denniseilander/pulse-about-application.svg?style=flat-square)](https://packagist.org/packages/denniseilander/pulse-about-application)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/denniseilander/pulse-about-application/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/denniseilander/pulse-about-application/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/denniseilander/pulse-about-application/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/denniseilander/pulse-about-application/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/denniseilander/pulse-about-application.svg?style=flat-square)](https://packagist.org/packages/denniseilander/pulse-about-application)

A Laravel Pulse card that displays application information by leveraging the output of the php artisan about command.

<img width="939" alt="Laravel-Pulse-Applicaiton-Information-Card" src="https://github.com/denniseilander/pulse-about-application/assets/3907144/fdbef9fd-21fc-4f90-af74-5b4c136c7a4b">


## Installation

You can install the package via composer:

```bash
composer require denniseilander/pulse-about-application
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="pulse-about-application-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="pulse-about-application-views"
```

## Usage

In your dashboard.blade.php you can now add this card:

```html
<x-pulse>
    ...
    <livewire:pulse.about-application />
</x-pulse>
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

- [Dennis Eilander](https://github.com/denniseilander)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
