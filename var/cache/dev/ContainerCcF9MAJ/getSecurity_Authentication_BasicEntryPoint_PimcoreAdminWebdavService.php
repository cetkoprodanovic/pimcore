<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_BasicEntryPoint_PimcoreAdminWebdavService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.basic_entry_point.pimcore_admin_webdav' shared service.
     *
     * @return \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint
     *
     * @deprecated Since symfony/security-bundle 5.4: The "security.authentication.basic_entry_point.pimcore_admin_webdav" service is deprecated, the logic is contained in the authenticators.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.4', 'The "security.authentication.basic_entry_point.pimcore_admin_webdav" service is deprecated, the logic is contained in the authenticators.');

        return $container->privates['security.authentication.basic_entry_point.pimcore_admin_webdav'] = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area');
    }
}