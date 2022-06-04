<?php

namespace Container5dKLUI4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Faker\Generator' shared service.
     *
     * @return \Faker\Generator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'fakerphp'.\DIRECTORY_SEPARATOR.'faker'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Faker'.\DIRECTORY_SEPARATOR.'Generator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'fakerphp'.\DIRECTORY_SEPARATOR.'faker'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Faker'.\DIRECTORY_SEPARATOR.'Factory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Faker'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'AliceProvider.php';

        $container->services['Faker\\Generator'] = $instance = \Faker\Factory::create('en_US');

        $instance->seed(1);
        $instance->addProvider(new \Nelmio\Alice\Faker\Provider\AliceProvider());

        return $instance;
    }
}
