<?php

namespace ContainerKAqHUj3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_Denormalizer_Specs_SimpleService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.denormalizer.specs.simple' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\SimpleSpecificationsDenormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'Fixture'.\DIRECTORY_SEPARATOR.'SpecificationsDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'Fixture'.\DIRECTORY_SEPARATOR.'SpecificationBagDenormalizer'.\DIRECTORY_SEPARATOR.'SimpleSpecificationsDenormalizer.php';

        return $container->privates['nelmio_alice.fixture_builder.denormalizer.specs.simple'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\SimpleSpecificationsDenormalizer(($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.legacy_constructor_denormalizer'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Constructor_LegacyConstructorDenormalizerService')), ($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.property.simple_denormalizer'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Property_SimpleDenormalizerService')), ($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_SimpleDenormalizerService')));
    }
}
