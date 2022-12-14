<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_http_cache.event_listener.invalidation' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'InvalidationListener.php';

return $this->privates['fos_http_cache.event_listener.invalidation'] = new \FOS\HttpCacheBundle\EventListener\InvalidationListener(($this->services['fos_http_cache.cache_manager'] ?? $this->getFosHttpCache_CacheManagerService()), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['fos_http_cache.rule_matcher.must_invalidate'] ?? $this->getFosHttpCache_RuleMatcher_MustInvalidateService()), NULL);
