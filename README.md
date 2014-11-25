# StringGenerator

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/remy-poirier/PSR/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/remy-poirier/PSR/?branch=master)

This library can generate awesome strings like passwords or lorem ipsum.

## PasswordGenerator

This lib generates passwords with multiple difficulties available.

```php
require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\PasswordGenerator::generate(50, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_HARD);
```

## LoremGenerator

This lib generates Lorem Ipsum texts in a random order.

```php
require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\LoremGenerator::generate(30);
```

