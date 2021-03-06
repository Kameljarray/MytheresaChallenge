<?php

namespace ContainerKAqHUj3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Hydrator_Property_SymfonyPropertyAccessService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.hydrator.property.symfony_property_access' shared service.
     *
     * @return \Nelmio\Alice\Generator\Hydrator\Property\SymfonyPropertyAccessorHydrator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Hydrator'.\DIRECTORY_SEPARATOR.'PropertyHydratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Hydrator'.\DIRECTORY_SEPARATOR.'Property'.\DIRECTORY_SEPARATOR.'SymfonyPropertyAccessorHydrator.php';

        return $container->privates['nelmio_alice.generator.hydrator.property.symfony_property_access'] = new \Nelmio\Alice\Generator\Hydrator\Property\SymfonyPropertyAccessorHydrator(($container->privates['nelmio_alice.property_accessor.std'] ?? $container->load('getNelmioAlice_PropertyAccessor_StdService')));
    }
}
