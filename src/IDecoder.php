<?php

namespace AntonioKadid\WAPPKitCore\Text;

use AntonioKadid\WAPPKitCore\Text\Exceptions\DecodingException;

/**
 * Interface IDecoder
 *
 * @package AntonioKadid\WAPPKitCore\Text
 */
interface IDecoder
{
    /**
     * @param string $text
     * @param bool   $silent
     *
     * @return NULL|mixed
     *
     * @throws DecodingException
     */
    function decode(string $text, bool $silent = FALSE);
}