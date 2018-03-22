<?php

$di = new \Phalcon\Di\FactoryDefault\Cli();
$di->set('config', function() use ($config) {
    return $config;
});
$di->set('db', function() use ($config) {
    return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
        "host" => $config->database->host,
        "username" => $config->database->username,
        "password" => $config->database->password,
        "dbname" => $config->database->name
    ));
});
$di->set('logger', function() use ($config) {

    $logName = date('Y-m-d') . '.log';
    $logPath = $config->directories->logsDir . $logName;
    $logger = new \Phalcon\Logger\Adapter\File($logPath);
    return $logger;
});
$di->set('modelsManager', function() use ($config) {
    return new \Phalcon\Mvc\Model\Manager();
});
