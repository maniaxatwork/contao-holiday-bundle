<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.assets.files_context' shared service.

return $this->services['contao.assets.files_context'] = new \Contao\CoreBundle\Asset\ContaoContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), 'staticFiles', false);
