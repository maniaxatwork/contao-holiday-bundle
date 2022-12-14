<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fragment.handler' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'FragmentHandler.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'FragmentHandler.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'LazyLoadingFragmentHandler.php';

$a = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'esi' => ['privates', 'fragment.renderer.esi', 'getFragment_Renderer_EsiService.php', true],
    'forward' => ['privates', 'contao.fragment.renderer.forward', 'getContao_Fragment_Renderer_ForwardService.php', true],
    'hinclude' => ['privates', 'fragment.renderer.hinclude', 'getFragment_Renderer_HincludeService.php', true],
    'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService.php', true],
], [
    'esi' => '?',
    'forward' => '?',
    'hinclude' => '?',
    'inline' => '?',
]);
$b = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

return $this->services['fragment.handler'] = new \Contao\CoreBundle\Fragment\FragmentHandler($a, new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($a, $b, false), $b, ($this->privates['contao.fragment.registry'] ?? $this->getContao_Fragment_RegistryService()), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []), false);
