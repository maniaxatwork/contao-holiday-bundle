<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao_manager.routing_loader' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'RouteLoaderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'RouteLoader.php';

return $this->services['contao_manager.routing_loader'] = new \Contao\ManagerBundle\Routing\RouteLoader(($this->services['routing.loader'] ?? $this->load('getRouting_LoaderService.php')), ($this->services['contao_manager.plugin_loader'] ?? $this->get('contao_manager.plugin_loader', 1)), ($this->services['kernel'] ?? $this->get('kernel', 1)), \dirname(__DIR__, 4));
