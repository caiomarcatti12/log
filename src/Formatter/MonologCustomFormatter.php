<?php

namespace CaioMarcatti12\Logger\Formatter;

use Monolog\Formatter\FormatterInterface;
use Monolog\LogRecord;

class MonologCustomFormatter  implements FormatterInterface
{
    public function format(LogRecord $record): string
    {
        $object = array_merge($record['context'], ['message' => $record['message']]);

        return json_encode($object).PHP_EOL;
    }

    public function formatBatch(array $records)
    {
        foreach ($records as $key => $record) {
            $records[$key] = $this->format($record);
        }

        return $records;
    }
}