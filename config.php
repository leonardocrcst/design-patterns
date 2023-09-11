<?php

function load(string $class)
{
    $filename = sprintf('%s.php', str_replace('\\', '/', $class));
    try {
        include_once $filename;
    } catch (\Throwable $e) {
        echo "$filename: file not found";
        exit();
    }
}

spl_autoload_register('load');