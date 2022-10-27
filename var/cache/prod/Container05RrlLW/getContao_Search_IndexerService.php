<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.search.indexer' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Search'.\DIRECTORY_SEPARATOR.'Indexer'.\DIRECTORY_SEPARATOR.'IndexerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Search'.\DIRECTORY_SEPARATOR.'Indexer'.\DIRECTORY_SEPARATOR.'DelegatingIndexer.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Search'.\DIRECTORY_SEPARATOR.'Indexer'.\DIRECTORY_SEPARATOR.'DefaultIndexer.php';

$this->services['contao.search.indexer'] = $instance = new \Contao\CoreBundle\Search\Indexer\DelegatingIndexer();

$instance->addIndexer(new \Contao\CoreBundle\Search\Indexer\DefaultIndexer(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), false));

return $instance;
