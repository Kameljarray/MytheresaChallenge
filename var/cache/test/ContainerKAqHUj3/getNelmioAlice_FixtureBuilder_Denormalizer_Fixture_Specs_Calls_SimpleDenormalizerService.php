<?php

namespace ContainerKAqHUj3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_SimpleDenormalizerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\CallsWithFlagsDenormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'Fixture'.\DIRECTORY_SEPARATOR.'SpecificationBagDenormalizer'.\DIRECTORY_SEPARATOR.'CallsDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'Fixture'.\DIRECTORY_SEPARATOR.'SpecificationBagDenormalizer'.\DIRECTORY_SEPARATOR.'Calls'.\DIRECTORY_SEPARATOR.'CallsWithFlagsDenormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'Fixture'.\DIRECTORY_SEPARATOR.'SpecificationBagDenormalizer'.\DIRECTORY_SEPARATOR.'Calls'.\DIRECTORY_SEPARATOR.'MethodFlagHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'Fixture'.\DIRECTORY_SEPARATOR.'SpecificationBagDenormalizer'.\DIRECTORY_SEPARATOR.'Calls'.\DIRECTORY_SEPARATOR.'MethodFlagHandler'.\DIRECTORY_SEPARATOR.'ConfiguratorFlagHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'Fixture'.\DIRECTORY_SEPARATOR.'SpecificationBagDenormalizer'.\DIRECTORY_SEPARATOR.'Calls'.\DIRECTORY_SEPARATOR.'MethodFlagHandler'.\DIRECTORY_SEPARATOR.'OptionalFlagHandler.php';

        return $container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\CallsWithFlagsDenormalizer(($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_FunctionDenormalizerService')), [0 => ($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.configurator_flag_handler'] ?? ($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.configurator_flag_handler'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\MethodFlagHandler\ConfiguratorFlagHandler())), 1 => ($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.optional_flag_handler'] ?? ($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.optional_flag_handler'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\MethodFlagHandler\OptionalFlagHandler()))]);
    }
}