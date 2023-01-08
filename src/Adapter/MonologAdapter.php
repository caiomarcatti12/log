<?php

namespace CaioMarcatti12\Logger\Adapter;

use CaioMarcatti12\Logger\Formatter\MonologCustomFormatter;
use CaioMarcatti12\Logger\Interfaces\LogInterface;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class MonologAdapter implements LogInterface
{
    private Logger $logger;

    public function __construct() {
        $this->createInstaceLogger();
        $this->createInstanceStreamHandler();
    }

    private function createInstaceLogger(): void {
        $this->logger = new Logger('app');
    }


    private function createInstanceStreamHandler(): void {
        $stream = new StreamHandler('php://stdout');
        $stream->setFormatter(new MonologCustomFormatter());
        $this->logger->pushHandler($stream);
    }

    public function debug(string $message, array $extraParams = []): void
    {
        $this->logger->debug($message, $extraParams);
    }

    public function info(string $message, array $extraParams = []): void
    {
        $this->logger->info($message, $extraParams);
    }

    public function notice(string $message, array $extraParams = []): void
    {
        $this->logger->notice($message, $extraParams);
    }

    public function warning(string $message, array $extraParams = []): void
    {
        $this->logger->warning($message, $extraParams);
    }

    public function error(string $message, array $extraParams = []): void
    {
        $this->logger->error($message, $extraParams);
    }

    public function critical(string $message, array $extraParams = []): void
    {
        $this->logger->critical($message, $extraParams);
    }

    public function alert(string $message, array $extraParams = []): void
    {
        $this->logger->alert($message, $extraParams);
    }

    public function emergency(string $message, array $extraParams = []): void
    {
        $this->logger->emergency($message, $extraParams);
    }
}