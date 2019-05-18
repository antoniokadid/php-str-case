<?php

namespace AntonioKadid\StringCase;

/**
 * Class StringCase
 *
 * @package AntonioKadid\StringCase
 */
abstract class StringCase implements IStringCase
{
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