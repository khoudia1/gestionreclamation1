<?php

namespace ContainerMOPKM7B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K6MEthmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K6MEthm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K6MEthm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ReclamerController::delete' => ['privates', '.service_locator.M6c.RvX', 'get_ServiceLocator_M6c_RvXService', true],
            'App\\Controller\\ReclamerController::edit' => ['privates', '.service_locator.M6c.RvX', 'get_ServiceLocator_M6c_RvXService', true],
            'App\\Controller\\ReclamerController::index' => ['privates', '.service_locator.oC4HL5i', 'get_ServiceLocator_OC4HL5iService', true],
            'App\\Controller\\ReclamerController::indexEtudiant' => ['privates', '.service_locator.oC4HL5i', 'get_ServiceLocator_OC4HL5iService', true],
            'App\\Controller\\ReclamerController::show' => ['privates', '.service_locator.M6c.RvX', 'get_ServiceLocator_M6c_RvXService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.LfWppqE', 'get_ServiceLocator_LfWppqEService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ReclamerController:delete' => ['privates', '.service_locator.M6c.RvX', 'get_ServiceLocator_M6c_RvXService', true],
            'App\\Controller\\ReclamerController:edit' => ['privates', '.service_locator.M6c.RvX', 'get_ServiceLocator_M6c_RvXService', true],
            'App\\Controller\\ReclamerController:index' => ['privates', '.service_locator.oC4HL5i', 'get_ServiceLocator_OC4HL5iService', true],
            'App\\Controller\\ReclamerController:indexEtudiant' => ['privates', '.service_locator.oC4HL5i', 'get_ServiceLocator_OC4HL5iService', true],
            'App\\Controller\\ReclamerController:show' => ['privates', '.service_locator.M6c.RvX', 'get_ServiceLocator_M6c_RvXService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.LfWppqE', 'get_ServiceLocator_LfWppqEService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ReclamerController::delete' => '?',
            'App\\Controller\\ReclamerController::edit' => '?',
            'App\\Controller\\ReclamerController::index' => '?',
            'App\\Controller\\ReclamerController::indexEtudiant' => '?',
            'App\\Controller\\ReclamerController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ReclamerController:delete' => '?',
            'App\\Controller\\ReclamerController:edit' => '?',
            'App\\Controller\\ReclamerController:index' => '?',
            'App\\Controller\\ReclamerController:indexEtudiant' => '?',
            'App\\Controller\\ReclamerController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
