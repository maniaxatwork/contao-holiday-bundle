<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Contao\CoreBundle\EventListener\DataContainer\DisableAppConfiguredSettingsListener' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DataContainer'.\DIRECTORY_SEPARATOR.'DisableAppConfiguredSettingsListener.php';

return $this->services['Contao\\CoreBundle\\EventListener\\DataContainer\\DisableAppConfiguredSettingsListener'] = new \Contao\CoreBundle\EventListener\DataContainer\DisableAppConfiguredSettingsListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), []);
