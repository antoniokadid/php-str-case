# WAPPKit Core - Text
A PHP library to work with text.

Part of Web Application Kit (WAPPKit) Core which powers WAPPKit, a privately owned CMS.

*Project under development and may be subject to a lot of changes. Use at your own risk.*

## Features
- Provides interface for text encoding/decoding.
- Provides JSON encoding/decoding.
- Providers functionality for changing text case:
  - Kebab (kebab-case)
  - Train (TRAIN-CASE)
  - Snake (snake_case)
  - Screaming snake (SCREAMING_SNAKE_CASE)
  - Lower camel (lowerCamelCase)
  - Upper camel (UpperCamelCase)

## Installation

```bash
composer require antoniokadid/wappkit-core-text
```

## Requirements
* PHP 7.1
* ext-mbstring
* ext-json

## Examples

```php
use AntonioKadid\WAPPKitCore\Text\TextCase;

$input = <<<EOT
Hello world
numbers 1 to 10 and 
some unicode chars
Γειά αυτό είναι παράδειγμα
EOT;

$kebab = TextCase::toKebab($input);
echo "kebab-case: " . $kebab . PHP_EOL;

$train = TextCase::toTrain($input);
echo "TRAIN-CASE: " . $train . PHP_EOL;

$snake = TextCase::toSnake($input);
echo "snake_case: " . $snake . PHP_EOL;

$screamingSnake = TextCase::toScreamingSnake($input);
echo "SCREAMING_SNAKE_CASE: " . $screamingSnake . PHP_EOL;

$lowerCamel = TextCase::toLowerCamel($input);
echo "lowerCamelCase: " . $lowerCamel . PHP_EOL;

$upperCamel = TextCase::toUpperCamel($input);
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

MIT license.