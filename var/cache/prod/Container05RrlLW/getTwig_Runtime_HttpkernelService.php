<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.runtime.httpkernel' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpKernelRuntime.php';

return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(($this->services['fragment.handler'] ?? $this->load('getFragment_HandlerService.php')));
