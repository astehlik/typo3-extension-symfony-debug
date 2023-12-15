<?php

use Swh\SymfonyDebug\Command\ContainerDebugCommand;
use Swh\SymfonyDebug\DependencyInjection\ContainerBuilderDebugger;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container, ContainerBuilder $containerBuilder): void {
    $services = $container->services();

    $services->defaults()
        ->autowire()
        ->autoconfigure();

    $services->set(ContainerBuilderDebugger::class);
    $services->set(ContainerDebugCommand::class);
};
