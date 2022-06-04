<?php

namespace ContainerKAqHUj3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_ReferenceLexerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.expression_language.lexer.reference_lexer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceLexer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'ExpressionLanguage'.\DIRECTORY_SEPARATOR.'LexerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixtureBuilder'.\DIRECTORY_SEPARATOR.'ExpressionLanguage'.\DIRECTORY_SEPARATOR.'Lexer'.\DIRECTORY_SEPARATOR.'ReferenceLexer.php';

        return $container->privates['nelmio_alice.fixture_builder.expression_language.lexer.reference_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceLexer();
    }
}
