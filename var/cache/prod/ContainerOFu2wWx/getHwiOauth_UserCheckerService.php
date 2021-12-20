<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHwiOauth_UserCheckerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'hwi_oauth.user_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\InMemoryUserChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/InMemoryUserChecker.php';

        return $container->services['hwi_oauth.user_checker'] = new \Symfony\Component\Security\Core\User\InMemoryUserChecker();
    }
}
