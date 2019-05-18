<?php

namespace AntonioKadid\StringCase\Styles;

use AntonioKadid\StringCase\StringCase;

/**
 * Class ScreamingSnake
 *
 * @package AntonioKadid\StringCase\Styles
 */
class ScreamingSnake extends StringCase
{
    /**
     * @inheritDoc
     */
    public static function fromCase(StringCase $case): StringCase
    {
        return new ScreamingSnake($case->_input);
    }

    /**
     * @inheritDoc
     */
    public static function tryParse(string $input): ?StringCase
    {
        $trimmedInput = trim($input);

        if (!@preg_match("/^([[:alnum:]]|\\_)+$/u", $trimmedInput))
            return NULL;

        if (!@preg_match("/^(([[:upper:]]|[[:digit:]])+\\_([[:upper:]]|[[:digit:]])+)+$/u", $trimmedInput))
            return NULL;

        return new ScreamingSnake(preg_replace("/\\_/u", ' ', $trimmedInput));
    }

    /**
     * @inheritDoc
     */
    public function convert(): string
    {
        return implode('_',
            preg_split("/\\s+/u",
                mb_strtoupper($this->preProcessInputForConversion(), 'UTF-8'), -1, PREG_SPLIT_NO_EMPTY));
    }
}