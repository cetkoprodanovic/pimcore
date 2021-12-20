<?php

namespace ContainerOFu2wWx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRedirectToServiceControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'HWI\Bundle\OAuthBundle\Controller\RedirectToServiceController' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Controller\RedirectToServiceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Controller/RedirectToServiceController.php';
        include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Util/DomainWhitelist.php';

        return $container->services['HWI\\Bundle\\OAuthBundle\\Controller\\RedirectToServiceController'] = new \HWI\Bundle\OAuthBundle\Controller\RedirectToServiceController(($container->privates['hwi_oauth.security.oauth_utils'] ?? $container->getHwiOauth_Security_OauthUtilsService()), new \HWI\Bundle\OAuthBundle\Util\DomainWhitelist([]), $container->parameters['hwi_oauth.firewall_names'], NULL, false, true);
    }
}
