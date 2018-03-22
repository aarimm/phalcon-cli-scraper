<?php

$config = require __DIR__ . "/../app/config/config.php";

// Phalcon Loader
require __DIR__ . '/../app/config/loader.php';

// Phalcon Services
require __DIR__ . '/../app/config/services.php';

// Composer Autoloader
require __DIR__ . '/../vendor/autoload.php';

$console = new \Phalcon\Cli\Console();
$console->setDI($di);

$arguments = [];
foreach ($argv as $k => $arg) {

    if ($k === 1) {
        $arguments["task"] = $arg;
    }
    else if ($k === 2) {
        $arguments["action"] = $arg;
    }
    else if ($k >= 3) {
        $arguments["params"][] = $arg;
    }
}

try
{
    // Handle incoming arguments
    $console->handle($arguments);
}
catch (\Phalcon\Exception $e)
{
    echo $e->getMessage();
    exit();
}