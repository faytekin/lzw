# faytekin/lzw

[![Latest Version on Packagist](https://img.shields.io/packagist/v/faytekin/lzw.svg?style=flat-square)](https://packagist.org/packages/faytekin/lzw)
[![Build Status](https://img.shields.io/travis/faytekin/lzw/main.svg?style=flat-square)](https://travis-ci.org/faytekin/lzw)
[![StyleCI](https://github.styleci.io/repos/317031151/shield?branch=main)](https://github.styleci.io/repos/317031151?branch=main)
[![Quality Score](https://img.shields.io/scrutinizer/g/faytekin/lzw.svg?style=flat-square)](https://scrutinizer-ci.com/g/faytekin/lzw)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/faytekin/lzw/main.svg?style=flat-square)](https://scrutinizer-ci.com/g/faytekin/lzw/?branch=main)

Using this package, you may encode string data with [Lempel–Ziv–Welch (LZW)](https://en.wikipedia.org/wiki/Lempel%E2%80%93Ziv%E2%80%93Welch) algorithm and decode back.

## System Requirements

- PHP 7.2
- ext-mbstring - for handling multibyte string (should be available on most systems)

## Installation

You can install this package via composer:
``` bash
composer require faytekin/lzw
```

Or add the following to your composer file:

    {
        "require": {
            "faytekin/lzw": "^1.0"
        }
    }


## Credits

- [Fatih Aytekin](https://github.com/faytekin)

## License

The MIT License (MIT). Please see [License File](LICENCE.md) for more information.
