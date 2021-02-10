<?php

namespace ContainerLcCc2fx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OC4HL5iService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.oC4HL5i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oC4HL5i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reclamerRepository' => ['privates', 'App\\Repository\\ReclamerRepository', 'getReclamerRepositoryService', true],
        ], [
            'reclamerRepository' => 'App\\Repository\\ReclamerRepository',
        ]);
    }
}
