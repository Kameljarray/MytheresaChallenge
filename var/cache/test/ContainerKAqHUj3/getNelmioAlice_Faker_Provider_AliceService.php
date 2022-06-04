<?php

namespace ContainerKAqHUj3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Faker_Provider_AliceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.faker.provider.alice' shared service.
     *
     * @return \Nelmio\Alice\Faker\Provider\AliceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Faker'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'AliceProvider.php';

        return $container->privates['nelmio_alice.faker.provider.alice'] = new \Nelmio\Alice\Faker\Provider\AliceProvider();
    }
}
