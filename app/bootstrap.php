<?php

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator();

//$configurator->setDebugMode('71.175.71.185'); // enable for your remote IP
$configurator->setDebugMode('170.115.248.20');
$configurator->enableTracy(__DIR__ . '/../log');

$configurator->setTimeZone('America/New_York');//Europe/Prague');
$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->createRobotLoader()
        ->addDirectory(__DIR__)
        ->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

$container = $configurator->createContainer();

return $container;
