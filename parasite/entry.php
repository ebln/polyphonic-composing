<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

$containerBuilder = new ContainerBuilder();
$loader           = new YamlFileLoader($containerBuilder, new FileLocator(__DIR__));
$loader->load('services.yaml');
$containerBuilder->compile();

/** @var \Ebln\ParasiteDemo\Endobiont\EndobionticService::class $service */
$service = $containerBuilder->get(\Ebln\ParasiteDemo\Endobiont\EndobionticService::class);

echo PHP_EOL . PHP_EOL . $service->act() . PHP_EOL;
