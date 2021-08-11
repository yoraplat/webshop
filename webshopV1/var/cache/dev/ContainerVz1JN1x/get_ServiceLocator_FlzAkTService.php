<?php

namespace ContainerVz1JN1x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FlzAkTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FlzAk_t' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FlzAk_t'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AuthenticationController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\FrontEnd\\ProductController::add' => ['privates', '.service_locator.xEFipQ6', 'get_ServiceLocator_XEFipQ6Service', true],
            'App\\Controller\\FrontEnd\\ProductController::index' => ['privates', '.service_locator.iyEwlLH', 'get_ServiceLocator_IyEwlLHService', true],
            'App\\Controller\\FrontEnd\\ProfileController::cart' => ['privates', '.service_locator.EgRG7Wp', 'get_ServiceLocator_EgRG7WpService', true],
            'App\\Controller\\FrontEnd\\ProfileController::index' => ['privates', '.service_locator.EgRG7Wp', 'get_ServiceLocator_EgRG7WpService', true],
            'App\\Controller\\FrontEnd\\ProfileController::orders' => ['privates', '.service_locator.EgRG7Wp', 'get_ServiceLocator_EgRG7WpService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AuthenticationController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\FrontEnd\\ProductController:add' => ['privates', '.service_locator.xEFipQ6', 'get_ServiceLocator_XEFipQ6Service', true],
            'App\\Controller\\FrontEnd\\ProductController:index' => ['privates', '.service_locator.iyEwlLH', 'get_ServiceLocator_IyEwlLHService', true],
            'App\\Controller\\FrontEnd\\ProfileController:cart' => ['privates', '.service_locator.EgRG7Wp', 'get_ServiceLocator_EgRG7WpService', true],
            'App\\Controller\\FrontEnd\\ProfileController:index' => ['privates', '.service_locator.EgRG7Wp', 'get_ServiceLocator_EgRG7WpService', true],
            'App\\Controller\\FrontEnd\\ProfileController:orders' => ['privates', '.service_locator.EgRG7Wp', 'get_ServiceLocator_EgRG7WpService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AuthenticationController::login' => '?',
            'App\\Controller\\FrontEnd\\ProductController::add' => '?',
            'App\\Controller\\FrontEnd\\ProductController::index' => '?',
            'App\\Controller\\FrontEnd\\ProfileController::cart' => '?',
            'App\\Controller\\FrontEnd\\ProfileController::index' => '?',
            'App\\Controller\\FrontEnd\\ProfileController::orders' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AuthenticationController:login' => '?',
            'App\\Controller\\FrontEnd\\ProductController:add' => '?',
            'App\\Controller\\FrontEnd\\ProductController:index' => '?',
            'App\\Controller\\FrontEnd\\ProfileController:cart' => '?',
            'App\\Controller\\FrontEnd\\ProfileController:index' => '?',
            'App\\Controller\\FrontEnd\\ProfileController:orders' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}