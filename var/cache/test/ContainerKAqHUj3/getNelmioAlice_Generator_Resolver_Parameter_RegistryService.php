<?php

namespace ContainerKAqHUj3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Resolver_Parameter_RegistryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.resolver.parameter.registry' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Parameter\ParameterResolverRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'ParameterResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Parameter'.\DIRECTORY_SEPARATOR.'ParameterResolverRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'ChainableParameterResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Parameter'.\DIRECTORY_SEPARATOR.'Chainable'.\DIRECTORY_SEPARATOR.'StaticParameterResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'ParameterResolverAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Parameter'.\DIRECTORY_SEPARATOR.'Chainable'.\DIRECTORY_SEPARATOR.'ArrayParameterResolver.php';

        return $container->privates['nelmio_alice.generator.resolver.parameter.registry'] = new \Nelmio\Alice\Generator\Resolver\Parameter\ParameterResolverRegistry([0 => ($container->privates['nelmio_alice.generator.resolver.parameter.chainable.static_parameter_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.parameter.chainable.static_parameter_resolver'] = new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\StaticParameterResolver())), 1 => ($container->privates['nelmio_alice.generator.resolver.parameter.chainable.array_parameter_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.parameter.chainable.array_parameter_resolver'] = new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\ArrayParameterResolver())), 2 => ($container->privates['nelmio_alice.generator.resolver.parameter.chainable.recursive_parameter_resolver'] ?? $container->load('getNelmioAlice_Generator_Resolver_Parameter_Chainable_RecursiveParameterResolverService'))]);
    }
}