<?php
namespace CaioMarcatti12\Logger;

use CaioMarcatti12\Core\Factory\Annotation\Autowired;
use CaioMarcatti12\Logger\Interfaces\LogInterface;

class Log
{
    #[Autowired]
    private static LogInterface $logger;
    private static array $defaultParams = [];

    public static function extra(string $key, mixed $value): void
    {
        self::$defaultParams[$key] = $value;
    }

    public static function debug(string $message, array $extraParams = []): void
    {
        self::$logger->debug($message, array_merge($extraParams, self::$defaultParams));
    }

    public static function info(string $message, array $extraParams = []): void
    {
        self::$logger->info($message, array_merge($extraParams, self::$defaultParams));
    }

    public static function notice(string $message, array $extraParams = []): void
    {
        self::$logger->notice($message, array_merge($extraParams, self::$defaultParams));
    }

    public static function warning(string $message, array $extraParams = []): void
    {
        self::$logger->warning($message, array_merge($extraParams, self::$defaultParams));
    }

    public static function error(string $message, array $extraParams = []): void
    {
        self::$logger->error($message, array_merge($extraParams, self::$defaultParams));
    }

    public static function critical(string $message, array $extraParams = []): void
    {
        self::$logger->critical($message, array_merge($extraParams, self::$defaultParams));
    }

    public static function alert(string $message, array $extraParams = []): void
    {
        self::$logger->alert($message, array_merge($extraParams, self::$defaultParams));
    }

    public static function emergency(string $message, array $extraParams = []): void
    {
        self::$logger->emergency($message, array_merge($extraParams, self::$defaultParams));
    }
}