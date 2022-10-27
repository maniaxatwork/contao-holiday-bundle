<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.image.picture_factory' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'PictureFactoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'PictureFactory.php';

return $this->services['contao.image.picture_factory'] = new \Contao\CoreBundle\Image\PictureFactory(($this->services['contao.image.picture_generator'] ?? $this->load('getContao_Image_PictureGeneratorService.php')), ($this->services['contao.image.image_factory'] ?? $this->load('getContao_Image_ImageFactoryService.php')), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), false, $this->parameters['contao.image.imagine_options']);
