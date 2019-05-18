<?php

require_once  __DIR__ . '/vendor/autoload.php';

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
echo "TRAIN-CASE: " . $case2->convert() . PHP_EOL;
echo "snake_case: " . $case3->convert() . PHP_EOL;
echo "SCREAMING_SNAKE_CASE: " . $case4->convert() . PHP_EOL;
echo "lowerCamelCase: " . $case5->convert() . PHP_EOL;
echo "UpperCamel: " . $case6->convert() . PHP_EOL;
