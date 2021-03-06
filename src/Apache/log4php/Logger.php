<?php

namespace Apache\log4php;

/**
 * Main logging class.
 */
class Logger
{
    /** The name of this Logger instance. */
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Returns a Logger by name.
     *
     * @param string $name The logger name
     * @return Logger
     */
    public static function getLogger($name)
    {
        return new Logger($name);
    }

    /**
     * Log a message object with the TRACE level.
     *
     * @param mixed $message message
     * @param Exception $throwable Optional throwable information to include
     *   in the logging event.
     */
    public function trace($message, $throwable = null)
    {
    }

    /**
     * Log a message object with the DEBUG level.
     *
     * @param mixed $message message
     * @param Exception $throwable Optional throwable information to include
     *   in the logging event.
     */
    public function debug($message, $throwable = null)
    {
    }

    /**
     * Log a message object with the INFO Level.
     *
     * @param mixed $message message
     * @param Exception $throwable Optional throwable information to include
     *   in the logging event.
     */
    public function info($message, $throwable = null)
    {
    }

    /**
     * Log a message with the WARN level.
     *
     * @param mixed $message message
     * @param Exception $throwable Optional throwable information to include
     *   in the logging event.
     */
    public function warn($message, $throwable = null)
    {
    }

    /**
     * Log a message object with the ERROR level.
     *
     * @param mixed $message message
     * @param Exception $throwable Optional throwable information to include
     *   in the logging event.
     */
    public function error($message, $throwable = null)
    {
    }

    /**
     * Log a message object with the FATAL level.
     *
     * @param mixed $message message
     * @param Exception $throwable Optional throwable information to include
     *   in the logging event.
     */
    public function fatal($message, $throwable = null)
    {
    }
}
