# DataValidator

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/remy-poirier/PSR/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/remy-poirier/PSR/?branch=master)

This library can validate different kind of data.

## Integer Validator

You can valid different cases :
1) if two integers are equal
2) if one if superior to an other
3) if one if inferior to an other
4) if one integer is beetween two others
5) if an integer is negative
6) if an integer is positive

```php
require __DIR__.'/vendor/autoload.php';

echo OKLM\DataValidator\IntegerValidator::equal(2,2);
```

## String Validator

This lib generates Lorem Ipsum texts in a random order.

```php
require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\LoremGenerator::generate(30);

## Boolean Validator

This lib generates Lorem Ipsum texts in a random order.

```php
require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\LoremGenerator::generate(30);
```

## Array Validator

This lib generates Lorem Ipsum texts in a random order.

```php
require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\LoremGenerator::generate(30);


