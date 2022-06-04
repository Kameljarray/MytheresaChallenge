<?php

namespace Container5dKLUI4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_Command_ExportCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.graphql.command.export_command' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\GraphQlExportCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'GraphQlExportCommand.php';

        $container->privates['api_platform.graphql.command.export_command'] = $instance = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\GraphQlExportCommand(($container->privates['api_platform.graphql.schema_builder'] ?? $container->load('getApiPlatform_Graphql_SchemaBuilderService')));

        $instance->setName('api:graphql:export');

        return $instance;
    }
}
