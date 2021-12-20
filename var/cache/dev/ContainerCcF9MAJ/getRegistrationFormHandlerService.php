<?php

namespace ContainerCcF9MAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationFormHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RegistrationFormHandler' shared autowired service.
     *
     * @return \App\Form\RegistrationFormHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Form/RegistrationFormHandler.php';

        return $container->privates['App\\Form\\RegistrationFormHandler'] = new \App\Form\RegistrationFormHandler();
    }
}
