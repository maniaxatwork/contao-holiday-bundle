<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.listener.command_scheduler' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CommandSchedulerListener.php';

return $this->privates['contao.listener.command_scheduler'] = new \Contao\CoreBundle\EventListener\CommandSchedulerListener((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Contao\\CoreBundle\\Cron\\Cron' => ['services', 'Contao\\CoreBundle\\Cron\\Cron', 'getCronService.php', true],
], [
    'Contao\\CoreBundle\\Cron\\Cron' => 'Contao\\CoreBundle\\Cron\\Cron',
]))->withContext('contao.listener.command_scheduler', $this), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), '/_fragment');
