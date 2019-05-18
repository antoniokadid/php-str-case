<?php

namespace AntonioKadid\StringCase\Styles;

use AntonioKadid\StringCase\StringCase;

/**
 * Class Kebab
 *
 * @package AntonioKadid\StringCase\Styles
 */
class Kebab extends StringCase
{
    /**
     * @inheritDoc
     */
    public static function fromCase(StringCase $stringCaseStyle): StringCase
    {
        return new Kebab($stringCaseStyle->_input);
    }

    /**
     * @inheritDoc
     */
    public static function tryParse(string $input): ?StringCase
    {
        $trimmedInput = trim($input);

        if (!@preg_match("/^([[:alnum:]]|\\-)+$/u", $trimmedInput))
            return NULL;

        if (!@preg_match("/^(([[:lower:]]|[[:digit:]])+\\-([[:lower:]]|[[:digit:]])+)+$/u", $trimmedInput))
            return NULL;

        return new Kebab(preg_replace("/\\-/u", ' ', $trimmedInput));
    }

    /**
     * @inheritDoc
     */
    public function convert(): string
    {
        return implode('-',
            preg_split("/\\s+/u",
                mb_strtolower($this->preProcessInputForConversion(), 'UTF-8'), -1, PREG_SPLIT_NO_EMPTY));
    }
}