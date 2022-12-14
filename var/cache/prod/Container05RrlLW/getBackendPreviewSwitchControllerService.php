<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Contao\CoreBundle\Controller\BackendPreviewSwitchController' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'BackendPreviewSwitchController.php';

return $this->services['Contao\\CoreBundle\\Controller\\BackendPreviewSwitchController'] = new \Contao\CoreBundle\Controller\BackendPreviewSwitchController(($this->services['contao.security.frontend_preview_authenticator'] ?? $this->load('getContao_Security_FrontendPreviewAuthenticatorService.php')), ($this->services['contao.security.token_checker'] ?? $this->getContao_Security_TokenCheckerService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['security.helper'] ?? $this->getSecurity_HelperService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['Contao\\CoreBundle\\Csrf\\ContaoCsrfTokenManager'] ?? $this->getContaoCsrfTokenManagerService()), 'contao_csrf_token');
