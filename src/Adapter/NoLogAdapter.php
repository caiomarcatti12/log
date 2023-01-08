<?php

namespace CaioMarcatti12\Logger\Adapter;

use CaioMarcatti12\Logger\Interfaces\LogInterface;

class NoLogAdapter implements LogInterface
{
    public function __construct() {

    }

    public function debug(string $message, array $extraParams = []): void
    {
    }

    public function info(string $message, array $extraParams = []): void
    {
    }

    public function notice(string $message, array $extraParams = []): void
    {
    }

    public function warning(string $message, array $extraParams = []): void
    {
    }

    public function error(string $message, array $extraParams = []): void
    {
    }

    public function critical(string $message, array $extraParams = []): void
    {
    }

    public function alert(string $message, array $extraParams = []): void
    {
    }

    public function emergency(string $message, array $extraParams = []): void
    {
    }
}