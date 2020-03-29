<?php

namespace AntonioKadid\WAPPKitCore\Text;

use AntonioKadid\WAPPKitCore\Text\Exceptions\EncodingException;

/**
 * Interface IEncoder
 *
 * @package AntonioKadid\WAPPKitCore\Text
 */
interface IEncoder
{
    /**
     * @param mixed $data
     * @param bool  $silent
     *
     * @return string|null
     *
     * @throws EncodingException
     */
    function encode($data, bool $silent = FALSE): ?string;
}