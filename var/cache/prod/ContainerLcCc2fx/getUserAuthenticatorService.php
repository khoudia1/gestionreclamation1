<?php

namespace ContainerLcCc2fx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\UserAuthenticator' shared autowired service.
     *
     * @return \App\Security\UserAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\UserAuthenticator'] = new \App\Security\UserAuthenticator(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['router'] ?? $container->getRouterService()), ($container->services['.container.private.security.csrf.token_manager'] ?? $container->load('get_Container_Private_Security_Csrf_TokenManagerService')), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')));
    }
}