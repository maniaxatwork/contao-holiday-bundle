<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.security.backend_user_provider' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserProviderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'PasswordUpgraderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'ContaoUserProvider.php';

return $this->privates['contao.security.backend_user_provider'] = new \Contao\CoreBundle\Security\User\ContaoUserProvider(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['session'] ?? $this->getSessionService()), 'Contao\\BackendUser', ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
