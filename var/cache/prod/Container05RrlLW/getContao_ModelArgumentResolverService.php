<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.model_argument_resolver' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'HttpKernel'.\DIRECTORY_SEPARATOR.'ModelArgumentResolver.php';

return $this->privates['contao.model_argument_resolver'] = new \Contao\CoreBundle\HttpKernel\ModelArgumentResolver(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()));