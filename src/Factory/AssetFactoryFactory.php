<?php
namespace Tonis\Asset\Factory;

use Assetic\Factory\AssetFactory;
use Interop\Container\ContainerInterface;
use Tonis\Package\PackageManager;

final class AssetFactoryFactory
{
    /**
     * @param ContainerInterface $di
     * @return AssetFactory
     */
    public function __invoke(ContainerInterface $di)
    {
        $pm = $di->get(PackageManager::class);
        $config = $pm->getMergedConfig()['asset-package'];

        $factory = new AssetFactory($config['root']);

        return $factory;
    }
}
