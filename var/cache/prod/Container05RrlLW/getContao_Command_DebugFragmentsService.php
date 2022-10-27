<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.command.debug_fragments' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugFragmentsCommand.php';

$this->privates['contao.command.debug_fragments'] = $instance = new \Contao\CoreBundle\Command\DebugFragmentsCommand();

$instance->add('contao.frontend_module.two_factor', ($this->privates['contao.fragment._config_kwBOC0u'] ?? ($this->privates['contao.fragment._config_kwBOC0u'] = new \Contao\CoreBundle\Fragment\FragmentConfig('contao.fragment._contao.frontend_module.two_factor', 'forward', ['ignore_errors' => false]))), ['category' => 'user', 'type' => 'two_factor', 'debugController' => 'Contao\\CoreBundle\\Controller\\FrontendModule\\TwoFactorController']);
$instance->add('contao.content_element.markdown', ($this->privates['contao.fragment._config_K115o4Z'] ?? ($this->privates['contao.fragment._config_K115o4Z'] = new \Contao\CoreBundle\Fragment\FragmentConfig('contao.fragment._contao.content_element.markdown', 'forward', ['ignore_errors' => false]))), ['category' => 'texts', 'type' => 'markdown', 'debugController' => 'Contao\\CoreBundle\\Controller\\ContentElement\\MarkdownController']);
$instance->setName('debug:fragments');

return $instance;
