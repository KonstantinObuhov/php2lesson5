<?php

function __autoload($className)
{
    $filename = str_replace('\\', '/', $className) . '.php';
    $path =  __DIR__ . '/' . $filename;
    require $path;
}