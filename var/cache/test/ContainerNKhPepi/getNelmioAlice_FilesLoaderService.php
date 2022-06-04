<?php

namespace ContainerNKhPepi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FilesLoaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'nelmio_alice.files_loader' shared service.
     *
     * @return \Nelmio\Alice\Loader\SimpleFilesLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FilesLoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'SimpleFilesLoader.php';

        return $container->services['nelmio_alice.files_loader'] = new \Nelmio\Alice\Loader\SimpleFilesLoader(($container->privates['nelmio_alice.file_parser.runtime_cache'] ?? $container->load('getNelmioAlice_FileParser_RuntimeCacheService')), ($container->services['nelmio_alice.data_loader'] ?? $container->load('getNelmioAlice_DataLoaderService')));
    }
}
