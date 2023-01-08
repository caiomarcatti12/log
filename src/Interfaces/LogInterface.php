<?php

namespace CaioMarcatti12\Logger\Interfaces;

interface LogInterface
{
    public function debug(string $message, array $extraParams = []): void;
    public function info(string $message, array $extraParams = []): void;
    public function notice(string $message, array $extraParams = []): void;
    public function warning(string $message, array $extraParams = []): void;
    public function error(string $message, array $extraParams = []): void;
    public function critical(string $message, array $extraParams = []): void;
    public function alert(string $message, array $extraParams = []): void;
    public function emergency(string $message, array $extraParams = []): void;
}