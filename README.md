# DataValidator

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/remy-poirier/PSR/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/remy-poirier/PSR/?branch=master)

This library can validate different kind of data.

## Integer Validator

You can valid different cases :
if two integers are equal,
if one if superior to an other,
if one if inferior to an other,
if one integer is beetween two others,
if an integer is negative,
if an integer is positive.

```php
require __DIR__.'/vendor/autoload.php';

echo OKLM\DataValidator\IntegerValidator::equal(2,2);
```

## String Validator

This lib valid strings in somes conditions :
if a string is equal to a length,
if a string is superior to a length,
if a string is inferior to a length,
if a string is between two length Integer,
If a string owns whitespace at the start and before the end,
If a string owns whitespace,


```php
require __DIR__.'/vendor/autoload.php';

echo OKLM\DataValidator\StringValidator::lengthValidator($string, 3);
```

## Boolean Validator

This lib valid boolean in somes conditions :
if a boolean is true,
if a boolean is false,

```php
require __DIR__.'/vendor/autoload.php';

echo OKLM\DataValidator\BooleanValidator::true($boolean);
```

## Array Validator

This lib valid arrays in somes conditions :
if an array is empty,
Compore an array if differents operators,
if a specific key exists into an array,
if a specific value exists into an array

```php
require __DIR__.'/vendor/autoload.php';

echo OKLM\DataValidator\ArrayValidator::($array, OKLM\DataValidator\ArrayValidator::EQUAL, 3);


