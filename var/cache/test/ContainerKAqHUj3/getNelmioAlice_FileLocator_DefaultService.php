<?php

namespace ContainerKAqHUj3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FileLocator_DefaultService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.file_locator.default' shared service.
     *
     * @return \Nelmio\Alice\FileLocator\DefaultFileLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FileLocator'.\DIRECTORY_SEPARATOR.'DefaultFileLocator.php';

        return $container->privates['nelmio_alice.file_locator.default'] = new \Nelmio\Alice\FileLocator\DefaultFileLocator();
    }
}
