
# Numlock - A CodeIgniter Phone Number Validation Library

## What is it?
Numlock is a CodeIgniter phone number validation library. This library is based on Google's [# libphonenumber for PHP](https://github.com/giggsey/libphonenumber-for-php).

## Installation

PHP versions 8.0 to PHP 8.2 are currently supported.

The PECL [mbstring](http://php.net/mbstring) extension is required.

It is recommended to use [composer](https://getcomposer.org) to install the library.

```bash
$ composer require davidnsai/numlock
```

You can also use any other [PSR-4](http://www.php-fig.org/psr/psr-4/) compliant autoloader.


## Usage
 For use in CodeIgniter projects, open the `app/Config/Validation.php` file and modify your code to look like the following code:

```php
<?php
namespace  Config;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;
use Numlock\ValidatePhone;
 ...
class  Validation  extends  BaseConfig
{
	public  array  $ruleSets  =  [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
		ValidatePhone::class,
	];
 ...
 // More code here
```

The above code makes Numlock's phone number validation methods accessible for use in validation throughout the application. At present, Numlock has the following methods available for use:
```php
	is_valid_phone(string  $phonenumber):  bool
	valid_phone_country(string  $phonenumber,  string  $iso_country_code):  bool
```

To validate your input, simply add these methods to your validation array. The `valid_phone_country` method. Takes the 2 letter iso country code as a parameter for validation.

### Running tests

To run tests, use PHPUnit:

To run the tests locally, run the `./vendor/bin/phpunit` script.