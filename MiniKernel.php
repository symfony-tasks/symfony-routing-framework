<?php

namespace SymfonyTasks\Routing;

use SymfonyTasks\Routing\Common\TaskBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

final class MiniKernel extends Kernel
{
    /** {@inheritdoc} */
    public function registerBundles()
    {
        return [
            new FrameworkBundle(),
            new TaskBundle(),
        ];
    }

    /** {@inheritdoc} */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/Tasks/config.yml');
    }

    public function getCacheDir()
    {
        return $this->getRootDir() . '/var/cache';
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getLogDir()
    {
        return $this->getRootDir() . '/var/logs';
    }
}
