<?php

namespace Creational\Sigleton;

class Logger extends Singleton
{
    public function writeLog($message)
    {
        $date = date('Y-m-d H:i:s');
        print "'Arquivo de Log' - " . "{$date}: {$message}\n";
    }

    public static function log($message)
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }
}