<?php

$dir = realpath(dirname(__FILE__));
defined('BASE') OR define('BASE', realpath($dir . '/../') . DIRECTORY_SEPARATOR . 'src/' . DIRECTORY_SEPARATOR);

spl_autoload_register(
    function ($class) {
        if (!class_exists($class)) {
            $class = str_ireplace("\\", '/', $class);
            require_once(BASE . $class . '.php');
        }

    }
);