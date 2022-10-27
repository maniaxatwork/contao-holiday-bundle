<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'scheb_two_factor.provider_handler' shared service.

if ($lazyLoad) {
    return $this->privates['scheb_two_factor.provider_handler'] = $this->createProxy('TwoFactorProviderHandler_3ecff6c', function () {
        return \TwoFactorProviderHandler_3ecff6c::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getSchebTwoFactor_ProviderHandlerService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'TwoFactorProviderHandler.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'TwoFactorTokenFactoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'TwoFactorTokenFactory.php';

return new \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler(($this->privates['scheb_two_factor.provider_registry'] ?? $this->getSchebTwoFactor_ProviderRegistryService()), new \Scheb\TwoFactorBundle\Security\Authentication\Token\TwoFactorTokenFactory());
