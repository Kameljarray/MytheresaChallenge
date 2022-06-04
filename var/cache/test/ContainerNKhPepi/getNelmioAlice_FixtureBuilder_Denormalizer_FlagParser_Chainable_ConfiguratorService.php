<?php

namespace ContainerNKhPepi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_Chainable_ConfiguratorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.configurator' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\ConfiguratorFlagParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'FlagParserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'FlagParser'.\DIRECTORY_SEPARATOR.'ChainableFlagParserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'FlagParser'.\DIRECTORY_SEPARATOR.'Chainable'.\DIRECTORY_SEPARATOR.'ConfiguratorFlagParser.php';

        return $container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.configurator'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\ConfiguratorFlagParser();
    }
}
