<?php
use Assetic\Factory\AssetFactory;
use Tonis\Asset\Factory\AssetFactoryFactory;
use Tonis\Di\Container;

return function (Container $di) {
    $di->set(AssetFactory::class, AssetFactoryFactory::class);
};
