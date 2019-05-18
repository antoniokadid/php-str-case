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
use \AntonioKadid\StringCase\Styles\Kebab;
use \AntonioKadid\StringCase\Styles\Train;
use \AntonioKadid\StringCase\Styles\Snake;
use \AntonioKadid\StringCase\Styles\ScreamingSnake;
use \AntonioKadid\StringCase\Styles\LowerCamel;
use \AntonioKadid\StringCase\Styles\UpperCamel;

$input = <<<EOT
Hello world
numbers 1 to 10 and 
some unicode chars
Γειά αυτό είναι παράδειγμα
EOT;

$case1 = new Kebab($input);
$case2 = new Train($input);
$case3 = new Snake($input);
$case4 = new ScreamingSnake($input);
$case5 = new LowerCamel($input);
$case6 = new UpperCamel($input);

echo "kebab-case: " . $case1->convert() . PHP_EOL;
echo "TRAIN-CASE: " . $case2->convert() . PHP_EOL;
echo "snake_case: " . $case3->convert() . PHP_EOL;
echo "SCREAMING_SNAKE_CASE: " . $case4->convert() . PHP_EOL;
echo "lowerCamelCase: " . $case5->convert() . PHP_EOL;
echo "UpperCamel: " . $case6->convert() . PHP_EOL;
```
##### Output
```bash
kebab-case: hello-world-numbers-1-to-10-and-some-unicode-chars-γειά-αυτό-είναι-παράδειγμα
lowerCamelCase: HELLO-WORLD-NUMBERS-1-TO-10-AND-SOME-UNICODE-CHARS-ΓΕΙΆ-ΑΥΤΌ-ΕΊΝΑΙ-ΠΑΡΆΔΕΙΓΜΑ
SCREAMING_SNAKE_CASE: hello_world_numbers_1_to_10_and_some_unicode_chars_γειά_αυτό_είναι_παράδειγμα
snake_case: HELLO_WORLD_NUMBERS_1_TO_10_AND_SOME_UNICODE_CHARS_ΓΕΙΆ_ΑΥΤΌ_ΕΊΝΑΙ_ΠΑΡΆΔΕΙΓΜΑ
TRAIN-CASE: helloWorldNumbers1To10AndSomeUnicodeCharsΓειάΑυτόΕίναιΠαράδειγμα
UpperCamel: HelloWorldNumbers1To10AndSomeUnicodeCharsΓειάΑυτόΕίναιΠαράδειγμα
```

## LICENSE

php-str-case is released under MIT license.