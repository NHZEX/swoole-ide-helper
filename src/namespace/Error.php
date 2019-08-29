<?php
namespace Swoole;

/**
 * @since 4.4.2
 */
class Error extends \Error
{

    protected $message;
    protected $code;
    protected $file;
    protected $line;

    /**
     * @param string $message [optional]
     * @param $code [optional]
     * @param $previous [optional]
     * @return mixed
     */
    public function __construct(string $message = null, $code = null, $previous = null){}

    /**
     * @return mixed
     */
    public function __wakeup(){}

    /**
     * @return mixed
     */
    public function __toString(){}


}
