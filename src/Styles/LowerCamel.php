<?php

namespace AntonioKadid\StringCase\Styles;

use AntonioKadid\StringCase\StringCase;

/**
 * Class LowerCamel
 *
 * @package AntonioKadid\StringCase\Styles
 */
class LowerCamel extends StringCase
{
    /**
     * @inheritDoc
     */
    public static function fromCase(StringCase $case): StringCase
    {
        return new LowerCamel($case->_input);
    }

    /**
     * @inheritDoc
     */
    public static function tryParse(string $input): ?StringCase
    {
        $trimmedInput = trim($input);

        if (!@preg_match("/^[[:alnum:]]+$/u", $trimmedInput))
            return NULL;

        if (!@preg_match("/^[[:lower:]]/u", $trimmedInput))
            return NULL;

        $result = preg_replace_callback("/([[:upper:]])/u", function($match){
            return " {$match[1]}";
        }, $trimmedInput);

        return new LowerCamel(trim($result));
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

        $result = implode('', $parts);

        return mb_strtolower(mb_substr($result, 0, 1, 'UTF-8'), 'UTF-8') .
                mb_substr($result, 1, NULL, 'UTF-8');
    }
}