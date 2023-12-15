<?php

namespace Swh\SymfonyDebug\DependencyInjection;

use TYPO3\CMS\Core\DependencyInjection\ContainerBuilder;
use TYPO3\CMS\Core\DependencyInjection\ServiceProviderRegistry;
use TYPO3\CMS\Core\Package\PackageManager;

readonly class ContainerBuilderDebugger
{
    public function __construct(
        private ContainerBuilder $containerBuilder,
        private PackageManager $packageManager,
        private ServiceProviderRegistry $registry
    ) {
    }

    public function getBuilder(): \Symfony\Component\DependencyInjection\ContainerBuilder
    {
        $reflection = new \ReflectionClass($this->containerBuilder);
        $buildContainerMethod = $reflection->getMethod('buildContainer');
        return $buildContainerMethod->invoke($this->containerBuilder, $this->packageManager, $this->registry);
    }
}
