<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.image.imagine' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ClassFactoryAwareInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'ImagineInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'AbstractImagine.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'InfoProvider.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Gd'.\DIRECTORY_SEPARATOR.'Imagine.php';

return $this->services['contao.image.imagine'] = new \Imagine\Gd\Imagine();
