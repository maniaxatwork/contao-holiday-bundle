<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Contao\CoreBundle\EventListener\DataContainer\MemberGroupsListener' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DataContainer'.\DIRECTORY_SEPARATOR.'MemberGroupsListener.php';

return $this->services['Contao\\CoreBundle\\EventListener\\DataContainer\\MemberGroupsListener'] = new \Contao\CoreBundle\EventListener\DataContainer\MemberGroupsListener(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['translator'] ?? $this->getTranslatorService()));
