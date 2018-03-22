<?php

return new \Phalcon\Config([
// DATABASE STUFF
    'database' => [
        'adapter' => 'Mysql',
        'host' => 'localhost',
        'username' => '',
        'password' => '',
        'name' => '',
    ],
    // DIRECTORY STUFF
    'directories' => [
        'tasksDir' => __DIR__ . '/../tasks/',
        'modelsDir' => __DIR__ . '/../models/',
        'classesDir' => __DIR__ . '/../classes/',
        'cookiesDir' => __DIR__ . '/../cookies/',
        'logsDir' => __DIR__ . '/../logs/',
    ],
        ]);

