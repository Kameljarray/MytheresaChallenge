<?php

namespace ContainerNKhPepi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Resolver_ParameterBag_RemoveConflictingParametersService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.resolver.parameter_bag.remove_conflicting_parameters' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Parameter\RemoveConflictingParametersParameterBagResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'ParameterBagResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Parameter'.\DIRECTORY_SEPARATOR.'RemoveConflictingParametersParameterBagResolver.php';

        return $container->privates['nelmio_alice.generator.resolver.parameter_bag.remove_conflicting_parameters'] = new \Nelmio\Alice\Generator\Resolver\Parameter\RemoveConflictingParametersParameterBagResolver(($container->privates['nelmio_alice.generator.resolver.parameter_bag.simple'] ?? $container->load('getNelmioAlice_Generator_Resolver_ParameterBag_SimpleService')));
    }
}
