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
dfgkldsfl
jdj ασδφασδω 123 AAAAA BBBbbbBB
saaaa sadf  asdfkj asdf
asda
bcde
Hello1world Asdfasf 1
EOT;

$case1 = new Kebab($input);
$case2 = new Train($input);
$case3 = new Snake($input);
$case4 = new ScreamingSnake($input);
$case5 = new LowerCamel($input);
$case6 = new UpperCamel($input);

echo "kebab-case: " . $case1->convert() . PHP_EOL;
echo "lowerCamelCase: " . $case2->convert() . PHP_EOL;
echo "SCREAMING_SNAKE_CASE: " . $case3->convert() . PHP_EOL;
echo "snake_case: " . $case4->convert() . PHP_EOL;
echo "TRAIN-CASE: " . $case5->convert() . PHP_EOL;
echo "UpperCamel: " . $case6->convert() . PHP_EOL;
```
#####Output
```bash
kebab-case: dfgkldsfl-jdj-ασδφασδω-123-aaaaa-bbbbbbbb-saaaa-sadf-asdfkj-asdf-asda-bcde-hello1world-asdfasf-1
TRAIN-CASE: DFGKLDSFL-JDJ-ΑΣΔΦΑΣΔΩ-123-AAAAA-BBBBBBBB-SAAAA-SADF-ASDFKJ-ASDF-ASDA-BCDE-HELLO1WORLD-ASDFASF-1
snake_case: dfgkldsfl_jdj_ασδφασδω_123_aaaaa_bbbbbbbb_saaaa_sadf_asdfkj_asdf_asda_bcde_hello1world_asdfasf_1
SCREAMING_SNAKE_CASE: DFGKLDSFL_JDJ_ΑΣΔΦΑΣΔΩ_123_AAAAA_BBBBBBBB_SAAAA_SADF_ASDFKJ_ASDF_ASDA_BCDE_HELLO1WORLD_ASDFASF_1
lowerCamelCase: dfgkldsflJdjΑσδφασδω123AaaaaBbbbbbbbSaaaaSadfAsdfkjAsdfAsdaBcdeHello1worldAsdfasf1
UpperCamel: DfgkldsflJdjΑσδφασδω123AaaaaBbbbbbbbSaaaaSadfAsdfkjAsdfAsdaBcdeHello1worldAsdfasf1
```

## LICENSE

php-str-case is released under MIT license.