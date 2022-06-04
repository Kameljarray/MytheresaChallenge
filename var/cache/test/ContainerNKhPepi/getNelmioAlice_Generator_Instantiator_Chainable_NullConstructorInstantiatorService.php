<?php

namespace ContainerNKhPepi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Instantiator_Chainable_NullConstructorInstantiatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\Chainable\NullConstructorInstantiator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'InstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Instantiator'.\DIRECTORY_SEPARATOR.'ChainableInstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Instantiator'.\DIRECTORY_SEPARATOR.'Chainable'.\DIRECTORY_SEPARATOR.'AbstractChainableInstantiator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'Instantiator'.\DIRECTORY_SEPARATOR.'Chainable'.\DIRECTORY_SEPARATOR.'NullConstructorInstantiator.php';

        return $container->privates['nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\NullConstructorInstantiator();
    }
}
