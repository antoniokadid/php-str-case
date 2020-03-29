<?php

namespace AntonioKadid\WAPPKitCore\Text\JSON;

use AntonioKadid\WAPPKitCore\Text\Encoder;
use AntonioKadid\WAPPKitCore\Text\Exceptions\EncodingException;

/**
 * Class JSONEncoder
 *
 * @package AntonioKadid\WAPPKitCore\Text\JSON
 */
class JSONEncoder extends Encoder
{
    /** @var int */
    private $_depth;
    /** @var int */
    private $_options;

    /**
     * JSONEncoder constructor.
     *
     * @param int $depth
     * @param int $options
     */
    public function __construct($depth = 512, $options = 0)
    {
        $this->_depth = $depth;
        $this->_options = $options;
    }

    /**
     * @param      $data
     * @param null $default
     *
     * @return string|null
     *
     * @throws EncodingException
     */
    public static function default($data, $default = NULL): ?string
    {
        $instance = new JSONEncoder();
        $result = $instance->encode($data, TRUE);

        return $result != NULL ? $result : $default;
    }

    /**
     * @inheritDoc
     */
    public function encode($data, bool $silent = FALSE): ?string
    {
        $this->error = '';
        $this->errorCode = JSON_ERROR_NONE;

        $encodedData = json_encode($data, $this->_options, $this->_depth);
        if ($encodedData !== FALSE)
            return $encodedData;

        if (!function_exists('json_last_error'))
            return $this->handleError('Unable to encode JSON.', JSON_ERROR_NONE, $silent);

        $errorCode = json_last_error();

        $error = 'Unable to encode JSON.';
        switch ($errorCode) {
            case JSON_ERROR_DEPTH:
                $error .= ' The maximum stack depth has been exceeded.';
                break;
            case JSON_ERROR_STATE_MISMATCH:
                $error .= ' Underflow or mode mismatch.';
                break;
            case JSON_ERROR_CTRL_CHAR:
                $error .= ' Control character error, possibly incorrectly encoded.';
                break;
            case JSON_ERROR_SYNTAX:
                $error .= ' Syntax error.';
                break;
            case JSON_ERROR_UTF8:
                $error .= ' Malformed UTF-8 characters, possibly incorrectly encoded.';
                break;
            default:
                $error .= ' Unknown error.';
                break;
        }

        return $this->handleError($error, $errorCode, $silent);
    }

    /**
     * @param string $error
     * @param int    $code
     * @param bool   $silent
     *
     * @return mixed|null
     *
     * @throws EncodingException
     */
    private function handleError(string $error, int $code, bool $silent)
    {
        $this->error = $error;
        $this->errorCode = $code;

        if ($silent === TRUE)
            return NULL;

        throw new EncodingException($error, $code);
    }
}