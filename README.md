# php-str-case
A library to work with string case styles.

Supported case styles:

- Kebab (kebab-case)
- Train (TRAIN-CASE)
- Snake (snake_case)
- Screaming snake (SCREAMING_SNAKE_CASE)
- Lower camel (lowerCamelCase)
- Upper camel (UpperCamelCase)

*Project under development.*

## Installation

```bash
composer require antoniokadid/php-str-case
```

## Requirements
* PHP 7.1
* ext-mbstring

## Examples

```php
use AntonioKadid\StringCase\StringCase;

$input = <<<EOT
Hello world
numbers 1 to 10 and 
some unicode chars
Γειά αυτό είναι παράδειγμα
EOT;

$kebab = StringCase::toKebab($input);
echo "kebab-case: " . $kebab . PHP_EOL;

$train = StringCase::toTrain($input);
echo "TRAIN-CASE: " . $train . PHP_EOL;

$snake = StringCase::toSnake($input);
echo "snake_case: " . $snake . PHP_EOL;

$screamingSnake = StringCase::toScreamingSnake($input);
echo "SCREAMING_SNAKE_CASE: " . $screamingSnake . PHP_EOL;

$lowerCamel = StringCase::toLowerCamel($input);
echo "lowerCamelCase: " . $lowerCamel . PHP_EOL;

$upperCamel = StringCase::toUpperCamel($input);
echo "UpperCamel: " . $upperCamel . PHP_EOL;
```
##### Output
```bash
kebab-case: hello-world-numbers-1-to-10-and-some-unicode-chars-γειά-αυτό-είναι-παράδειγμα
TRAIN-CASE: HELLO-WORLD-NUMBERS-1-TO-10-AND-SOME-UNICODE-CHARS-ΓΕΙΆ-ΑΥΤΌ-ΕΊΝΑΙ-ΠΑΡΆΔΕΙΓΜΑ
snake_case: hello_world_numbers_1_to_10_and_some_unicode_chars_γειά_αυτό_είναι_παράδειγμα
SCREAMING_SNAKE_CASE: HELLO_WORLD_NUMBERS_1_TO_10_AND_SOME_UNICODE_CHARS_ΓΕΙΆ_ΑΥΤΌ_ΕΊΝΑΙ_ΠΑΡΆΔΕΙΓΜΑ
lowerCamelCase: helloWorldNumbers1To10AndSomeUnicodeCharsΓειάΑυτόΕίναιΠαράδειγμα
UpperCamel: HelloWorldNumbers1To10AndSomeUnicodeCharsΓειάΑυτόΕίναιΠαράδειγμα
```

## LICENSE

php-str-case is released under MIT license.