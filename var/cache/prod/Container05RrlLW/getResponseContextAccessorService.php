<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Contao\CoreBundle\Routing\ResponseContext\ResponseContextAccessor' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'ResponseContext'.\DIRECTORY_SEPARATOR.'ResponseContextAccessor.php';

return $this->services['Contao\\CoreBundle\\Routing\\ResponseContext\\ResponseContextAccessor'] = new \Contao\CoreBundle\Routing\ResponseContext\ResponseContextAccessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
