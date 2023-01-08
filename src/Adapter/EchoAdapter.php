<?php

namespace CaioMarcatti12\Logger\Adapter;

use CaioMarcatti12\Logger\Interfaces\LogInterface;

class EchoAdapter implements LogInterface
{
    public function __construct() {

    }

    public function debug(string $message, array $extraParams = []): void
    {
        $this->output($message, $extraParams);
    }

    public function info(string $message, array $extraParams = []): void
    {
        $this->output($message, $extraParams);
    }

    public function notice(string $message, array $extraParams = []): void
    {
        $this->output($message, $extraParams);
    }

    public function warning(string $message, array $extraParams = []): void
    {
        $this->output($message, $extraParams);
    }

    public function error(string $message, array $extraParams = []): void
    {
        $this->output($message, $extraParams);
    }

    public function critical(string $message, array $extraParams = []): void
    {
        $this->output($message, $extraParams);
    }

    public function alert(string $message, array $extraParams = []): void
    {
        $this->output($message, $extraParams);
    }

    public function emergency(string $message, array $extraParams = []): void
    {
        $this->output($message, $extraParams);
    }

    public function  output(string $message, array $extraParams = []){
        echo json_encode(array_merge(['message' => $message], $extraParams));
    }
}