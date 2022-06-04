<?php

namespace ContainerNKhPepi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_RegistryDenormalizerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.denormalizer.fixture.registry_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\FixtureDenormalizerRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'Fixture'.\DIRECTORY_SEPARATOR.'FixtureDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'Fixture'.\DIRECTORY_SEPARATOR.'FixtureDenormalizerRegistry.php';

        return $container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.registry_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\FixtureDenormalizerRegistry(($container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.element'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_ElementService')), [0 => ($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_list'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleListService')), 1 => ($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.reference_range_name'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_ReferenceRangeNameService')), 2 => ($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_range'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleRangeService')), 3 => ($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleService'))]);
    }
}
