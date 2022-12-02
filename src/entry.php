<?php

require __DIR__ . '/../vendor/autoload.php';

$service = new \Ebln\ParasiteDemo\ExobionticService();

use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new \Ebln\ParasiteDemo\ExoCommand());
$application->run();
