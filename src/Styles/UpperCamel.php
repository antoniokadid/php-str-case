<?php

namespace AntonioKadid\StringCase\Styles;

use AntonioKadid\StringCase\StringCase;

/**
 * Class UpperCamel
 *
 * @package AntonioKadid\StringCase\Styles
 */
class UpperCamel extends StringCase
{
    /**
     * @inheritDoc
     */
    public static function fromCase(StringCase $case): StringCase
    {
        return new UpperCamel($case->_input);
    }

    /**
     * @inheritDoc
     */
    public static function tryParse(string $input): ?StringCase
    {
        $trimmedInput = trim($input);

        if (!@preg_match("/^[[:alnum:]]+$/u", $trimmedInput))
            return NULL;

        if (!@preg_match("/^[[:upper:]]/u", $trimmedInput))
            return NULL;

        $result = preg_replace_callback("/([[:upper:]])/u", function ($match) {
            return " {$match[1]}";
        }, $trimmedInput);

        return new UpperCamel(trim($result));
    }

    /**
     * @inheritDoc
     */
    public function convert(): string
    {
        $parts = preg_split("/\\s+/u", $this->preProcessInputForConversion(), -1, PREG_SPLIT_NO_EMPTY);

        array_walk($parts, function (string &$value) {
            $tmpValue = mb_strtolower($value, 'UTF-8');
            $value = mb_strtoupper(mb_substr($tmpValue, 0, 1, 'UTF-8'), 'UTF-8') .
                mb_substr($tmpValue, 1, NULL, 'UTF-8');
        });

        return implode('', $parts);
    }
}