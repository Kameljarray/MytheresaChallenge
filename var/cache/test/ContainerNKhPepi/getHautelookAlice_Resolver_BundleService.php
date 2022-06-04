<?php

namespace ContainerNKhPepi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHautelookAlice_Resolver_BundleService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'hautelook_alice.resolver.bundle' shared service.
     *
     * @return \Hautelook\AliceBundle\Resolver\Bundle\NoBundleResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'hautelook'.\DIRECTORY_SEPARATOR.'alice-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'BundleResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'hautelook'.\DIRECTORY_SEPARATOR.'alice-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'NoBundleResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'hautelook'.\DIRECTORY_SEPARATOR.'alice-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'SimpleBundleResolver.php';

        return $container->services['hautelook_alice.resolver.bundle'] = new \Hautelook\AliceBundle\Resolver\Bundle\NoBundleResolver(($container->privates['hautelook_alice.resolver.bundle.simple_resolver'] ?? ($container->privates['hautelook_alice.resolver.bundle.simple_resolver'] = new \Hautelook\AliceBundle\Resolver\Bundle\SimpleBundleResolver(($container->services['kernel'] ?? $container->get('kernel', 1))))));
    }
}
