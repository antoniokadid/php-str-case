<?php

namespace AntonioKadid\StringCase;

/**
 * Interface IStringCase
 *
 * @package AntonioKadid\StringCase
 */
interface IStringCase
{
    /**
     * @param StringCase $case
     *
     * @return StringCase
     */
    public static function fromCase(StringCase $case): StringCase;

    /**
     * @param string $input
     *
     * @return StringCase|NULL
     */
    public static function tryParse(string $input): ?StringCase;

    /**
     * @return string
     */
    public function convert(): string;
}