<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'scheb_two_factor.security.listener.check_two_factor_code' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'AbstractCheckCodeListener.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CheckTwoFactorCodeListener.php';

return $this->privates['scheb_two_factor.security.listener.check_two_factor_code'] = new \Scheb\TwoFactorBundle\Security\Http\EventListener\CheckTwoFactorCodeListener(($this->privates['scheb_two_factor.provider_preparation_recorder'] ?? $this->getSchebTwoFactor_ProviderPreparationRecorderService()), ($this->privates['scheb_two_factor.provider_registry'] ?? $this->getSchebTwoFactor_ProviderRegistryService()));
