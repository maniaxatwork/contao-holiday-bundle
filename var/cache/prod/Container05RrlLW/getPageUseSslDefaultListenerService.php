<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Contao\CoreBundle\EventListener\DataContainer\PageUseSslDefaultListener' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DataContainer'.\DIRECTORY_SEPARATOR.'PageUseSslDefaultListener.php';

return $this->services['Contao\\CoreBundle\\EventListener\\DataContainer\\PageUseSslDefaultListener'] = new \Contao\CoreBundle\EventListener\DataContainer\PageUseSslDefaultListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));