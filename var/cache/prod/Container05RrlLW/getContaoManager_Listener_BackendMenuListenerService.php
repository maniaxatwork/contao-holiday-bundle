<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao_manager.listener.backend_menu_listener' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'BackendMenuListener.php';

return $this->privates['contao_manager.listener.backend_menu_listener'] = new \Contao\ManagerBundle\EventListener\BackendMenuListener(($this->services['security.helper'] ?? $this->getSecurity_HelperService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['translator'] ?? $this->getTranslatorService()), false, NULL, ($this->services['contao_manager.jwt_manager'] ?? $this->get('contao_manager.jwt_manager', 3)));
