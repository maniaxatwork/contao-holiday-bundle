<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.command.install' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'InstallCommand.php';

$this->services['contao.command.install'] = $instance = new \Contao\CoreBundle\Command\InstallCommand(\dirname(__DIR__, 4), 'files', 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/assets/images');

$instance->setName('contao:install');

return $instance;
