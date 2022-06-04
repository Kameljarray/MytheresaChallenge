<?php

namespace ContainerGyfX9Lo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHautelookAlice_DataFixtures_AppendLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'hautelook_alice.data_fixtures.append_loader' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\FileResolverLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'PersisterAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileResolverLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FileResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'hautelook'.\DIRECTORY_SEPARATOR.'alice-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'File'.\DIRECTORY_SEPARATOR.'KernelFileResolver.php';

        return $container->services['hautelook_alice.data_fixtures.append_loader'] = new \Fidry\AliceDataFixtures\Loader\FileResolverLoader(($container->privates['fidry_alice_data_fixtures.doctrine.persister_loader'] ?? $container->load('getFidryAliceDataFixtures_Doctrine_PersisterLoaderService')), ($container->services['hautelook_alice.resolver.file'] ?? ($container->services['hautelook_alice.resolver.file'] = new \Hautelook\AliceBundle\Resolver\File\KernelFileResolver(($container->services['kernel'] ?? $container->get('kernel', 1))))));
    }
}
