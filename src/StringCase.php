<?php

namespace AntonioKadid\StringCase;

/**
 * Class StringCase
 *
 * @package AntonioKadid\StringCase
 */
abstract class StringCase implements IStringCase
{
    public const UNKNOWN_CASE = 0;
    public const LOWER_CAMEL_CASE = 1;
    public const UPPER_CAMEL_CASE = 2;
    public const SNAKE_CASE = 3;
    public const SCREAMING_SNAKE_CASE = 4;
    public const KEBAB_CASE = 5;
    public const TRAIN_CASE = 6;

    /** @var string */
    protected $_input;

    /**
     * StringCase constructor.
     *
     * @param string $input
     */
    public function __construct(string $input = '')
    {
        $this->_input = $input;
    }

    /**
     * @return string
     */
    public abstract function convert(): string;

    /**
     * @return string
     */
    protected function preProcessInputForConversion(): string
    {
        return trim(preg_replace("/[^[:alnum:][:space:]]/u", '', $this->_input));
    }
}