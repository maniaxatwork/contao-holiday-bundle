<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'scheb_two_factor.form_controller' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'FormController.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'TwoFactorFirewallContext.php';

return $this->services['scheb_two_factor.form_controller'] = new \Scheb\TwoFactorBundle\Controller\FormController(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['scheb_two_factor.provider_registry'] ?? $this->getSchebTwoFactor_ProviderRegistryService()), ($this->services['scheb_two_factor.firewall_context'] ?? ($this->services['scheb_two_factor.firewall_context'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\TwoFactorFirewallContext([]))), ($this->services['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['scheb_two_factor.default_trusted_device_manager'] ?? $this->load('getSchebTwoFactor_DefaultTrustedDeviceManagerService.php')), true);
