<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.listener.insert_tags.translation' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'InsertTags'.\DIRECTORY_SEPARATOR.'TranslationListener.php';

return $this->services['contao.listener.insert_tags.translation'] = new \Contao\CoreBundle\EventListener\InsertTags\TranslationListener(($this->services['translator'] ?? $this->getTranslatorService()));
