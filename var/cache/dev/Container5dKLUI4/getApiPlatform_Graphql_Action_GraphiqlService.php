<?php

namespace Container5dKLUI4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_Action_GraphiqlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.graphql.action.graphiql' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Action\GraphiQlAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'GraphiQlAction.php';

        return $container->services['api_platform.graphql.action.graphiql'] = new \ApiPlatform\Core\GraphQl\Action\GraphiQlAction(($container->privates['twig'] ?? $container->load('getTwigService')), ($container->privates['api_platform.router'] ?? $container->getApiPlatform_RouterService()), true, '', NULL);
    }
}
