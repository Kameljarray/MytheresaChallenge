<?php

namespace ContainerNKhPepi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_StringTokenParserService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\StringTokenParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'ExpressionLanguage'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'TokenParserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'ExpressionLanguage'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'ChainableTokenParserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'ExpressionLanguage'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'TokenParser'.\DIRECTORY_SEPARATOR.'Chainable'.\DIRECTORY_SEPARATOR.'StringTokenParser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'ExpressionLanguage'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'TokenParser'.\DIRECTORY_SEPARATOR.'Chainable'.\DIRECTORY_SEPARATOR.'ArgumentEscaper.php';

        return $container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\StringTokenParser(($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\ArgumentEscaper())));
    }
}
