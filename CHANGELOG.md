# Changelog

All notable changes to `pulse-about-application` will be documented in this file.

## 1.0.0 - 2026-03-18

Laravel 13 support and updated requirements.

### Breaking changes

- **PHP 8.3+ required** — PHP 8.1 and 8.2 are no longer supported
- **Laravel 12+ required** — Laravel 10 and 11 are no longer supported (EOL)

### What's new

- **Laravel 13 support** — Compatible with Laravel 12 and 13
- **PHP 8.4 & 8.5** — CI tests run on PHP 8.3, 8.4, and 8.5

### Upgrade

If you're on PHP 8.1/8.2 or Laravel 10/11, upgrade your environment first:

```bash
composer require denniseilander/pulse-about-application:^1.0

```
### Full changelog

- Require PHP 8.3+ and Laravel 12+
- Add Laravel 13 support (via laravel/pulse dev-1.x until stable release)
- Simplify dev dependencies for Laravel 12/13 only
- Fix Pest CI run with `--no-coverage`

## 0.3.0 - 2025-03-05

### What's Changed

* Bump dependabot/fetch-metadata from 2.2.0 to 2.3.0 by @dependabot in https://github.com/denniseilander/pulse-about-application/pull/11
* Bump aglipanci/laravel-pint-action from 2.4 to 2.5 by @dependabot in https://github.com/denniseilander/pulse-about-application/pull/12
* Laravel 12.x Compatibility by @laravel-shift in https://github.com/denniseilander/pulse-about-application/pull/13

### New Contributors

* @laravel-shift made their first contribution in https://github.com/denniseilander/pulse-about-application/pull/13

**Full Changelog**: https://github.com/denniseilander/pulse-about-application/compare/0.2.1...0.3.0

## 0.2.1 - 2025-01-21

### What's Changed

* Bump dependabot/fetch-metadata from 1.6.0 to 2.0.0 by @dependabot in https://github.com/denniseilander/pulse-about-application/pull/5
* Bump aglipanci/laravel-pint-action from 2.3.1 to 2.4 by @dependabot in https://github.com/denniseilander/pulse-about-application/pull/6
* Bump dependabot/fetch-metadata from 2.0.0 to 2.1.0 by @dependabot in https://github.com/denniseilander/pulse-about-application/pull/7
* Bump dependabot/fetch-metadata from 2.1.0 to 2.2.0 by @dependabot in https://github.com/denniseilander/pulse-about-application/pull/8
* [9] Add support for integers and fallback to string casted value by @denniseilander in https://github.com/denniseilander/pulse-about-application/pull/10

**Full Changelog**: https://github.com/denniseilander/pulse-about-application/compare/0.2.0...0.2.1

## 0.2.0 - 2024-03-20

### What's Changed

* [PUL-3] Add support for Laravel 11 by @denniseilander in https://github.com/denniseilander/pulse-about-application/pull/4

**Full Changelog**: https://github.com/denniseilander/pulse-about-application/compare/0.1.0...0.2.0

## 0.1.1 - 2023-12-04

- Add screenshot of the Pulse card

## 0.1.0 - 2023-12-04

- Added the "Application information" Laravel Pulse Card
