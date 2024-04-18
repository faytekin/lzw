# faytekin/lzw

[![Latest Version on Packagist](https://img.shields.io/packagist/v/faytekin/lzw.svg?style=flat-square)](https://packagist.org/packages/faytekin/lzw)
[![Quality Score](https://img.shields.io/scrutinizer/g/faytekin/lzw.svg?style=flat-square)](https://scrutinizer-ci.com/g/faytekin/lzw)

Using this package, you may encode string data with [Lempel–Ziv–Welch (LZW)](https://en.wikipedia.org/wiki/Lempel%E2%80%93Ziv%E2%80%93Welch) algorithm and decode back.

## System Requirements

- PHP >=7.2|^8.0
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
