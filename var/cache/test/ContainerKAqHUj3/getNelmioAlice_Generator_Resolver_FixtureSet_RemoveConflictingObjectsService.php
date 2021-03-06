<?php

namespace ContainerKAqHUj3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Resolver_FixtureSet_RemoveConflictingObjectsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.resolver.fixture_set.remove_conflicting_objects' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\FixtureSet\RemoveConflictingObjectsResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'FixtureSetResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'FixtureSet'.\DIRECTORY_SEPARATOR.'RemoveConflictingObjectsResolver.php';

        return $container->privates['nelmio_alice.generator.resolver.fixture_set.remove_conflicting_objects'] = new \Nelmio\Alice\Generator\Resolver\FixtureSet\RemoveConflictingObjectsResolver(($container->privates['nelmio_alice.generator.resolver.fixture_set.simple'] ?? $container->load('getNelmioAlice_Generator_Resolver_FixtureSet_SimpleService')));
    }
}
