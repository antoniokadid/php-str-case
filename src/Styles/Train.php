<?php

namespace AntonioKadid\StringCase\Styles;

use AntonioKadid\StringCase\StringCase;

/**
 * Class Train
 *
 * @package AntonioKadid\StringCase\Styles
 */
class Train extends StringCase
{
    /**
     * @inheritDoc
     */
    public static function fromCase(StringCase $case): StringCase
    {
        return new Train($case->_input);
    }

    /**
     * @inheritDoc
     */
    public static function tryParse(string $input): ?StringCase
    {
        $trimmedInput = trim($input);

        if (!@preg_match("/^([[:alnum:]]|\\-)+$/u", $trimmedInput))
            return NULL;

        if (!@preg_match("/^(([[:upper:]]|[[:digit:]])+\\-([[:upper:]]|[[:digit:]])+)+$/u", $trimmedInput))
            return NULL;

        return new Train(preg_replace("/\\-/u", ' ', $trimmedInput));
    }

    /**
     * @inheritDoc
     */
    public function convert(): string
    {
        return implode('-',
            preg_split("/\\s+/u",
                mb_strtoupper($this->preProcessInputForConversion(), 'UTF-8'), -1, PREG_SPLIT_NO_EMPTY));
    }
}