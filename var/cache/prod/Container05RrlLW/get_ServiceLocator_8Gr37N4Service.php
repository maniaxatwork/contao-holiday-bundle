<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.8Gr37N4' shared service.

return $this->privates['.service_locator.8Gr37N4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'model' => ['privates', '.errored..service_locator.8Gr37N4.Contao\\ModuleModel', NULL, 'Cannot autowire service ".service_locator.8Gr37N4": it references class "Contao\\ModuleModel" but no such service exists.'],
], [
    'model' => 'Contao\\ModuleModel',
]);