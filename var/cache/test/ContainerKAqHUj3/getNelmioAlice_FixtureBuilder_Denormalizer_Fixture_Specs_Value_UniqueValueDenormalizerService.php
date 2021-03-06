<?php

namespace ContainerKAqHUj3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Value_UniqueValueDenormalizerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Value\UniqueValueDenormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'Fixture'.\DIRECTORY_SEPARATOR.'SpecificationBagDenormalizer'.\DIRECTORY_SEPARATOR.'ValueDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'Fixture'.\DIRECTORY_SEPARATOR.'SpecificationBagDenormalizer'.\DIRECTORY_SEPARATOR.'Value'.\DIRECTORY_SEPARATOR.'UniqueValueDenormalizer.php';

        return $container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Value\UniqueValueDenormalizer(($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.simple_value_denormalizer'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Value_SimpleValueDenormalizerService')));
    }
}
