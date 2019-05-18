<?php

namespace AntonioKadid\StringCase\Styles;

use AntonioKadid\StringCase\StringCase;

/**
 * Class Snake
 *
 * @package AntonioKadid\StringCase\Styles
 */
class Snake extends StringCase
{
    /**
     * @inheritDoc
     */
    public static function fromCase(StringCase $case): StringCase
    {
        return new Snake($case->_input);
    }

    /**
     * @inheritDoc
     */
    public static function tryParse(string $input): ?StringCase
    {
        $trimmedInput = trim($input);

        if (!@preg_match("/^([[:alnum:]]|\\_)+$/u", $trimmedInput))
            return NULL;

        if (!@preg_match("/^(([[:lower:]]|[[:digit:]])+\\_([[:lower:]]|[[:digit:]])+)+$/u", $trimmedInput))
            return NULL;

        return new Snake(preg_replace("/\\_/u", ' ', $trimmedInput));
    }

    /**
     * @inheritDoc
     */
    public function convert(): string
    {
        return implode('_',
            preg_split("/\\s+/u",
                mb_strtolower($this->preProcessInputForConversion(), 'UTF-8'), -1, PREG_SPLIT_NO_EMPTY));
    }
}