<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_debug' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationDebugCommand.php';

$this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->load('getTranslation_ReaderService.php')), ($this->privates['translation.extractor'] ?? $this->load('getTranslation_ExtractorService.php')), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu/Resources/views'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LocaleAwareListener.php'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationDebugCommand.php'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'TranslationsCacheWarmer.php'), 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TranslationExtension.php'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle'.\DIRECTORY_SEPARATOR.'DateTimeFormatter.php'), 7 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'maintenance-bundle-deprecated'.\DIRECTORY_SEPARATOR.'Drivers'.\DIRECTORY_SEPARATOR.'DriverFactory.php'), 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'BackendRebuildCacheMessageListener.php'), 9 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DataContainer'.\DIRECTORY_SEPARATOR.'ContentCompositionListener.php'), 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DataContainer'.\DIRECTORY_SEPARATOR.'MemberGroupsListener.php'), 11 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DataContainer'.\DIRECTORY_SEPARATOR.'PageUrlListener.php'), 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DataContainer'.\DIRECTORY_SEPARATOR.'ThemeTemplatesListener.php'), 13 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DataContainer'.\DIRECTORY_SEPARATOR.'ValidateCustomRgxpListener.php'), 14 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'Widget'.\DIRECTORY_SEPARATOR.'CustomRgxpListener.php'), 15 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'Widget'.\DIRECTORY_SEPARATOR.'HttpUrlListener.php'), 16 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'BackendLocaleListener.php'), 17 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'BackendMenuListener.php'), 18 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'BackendLogoutListener.php'), 19 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'BackendPreviewListener.php'), 20 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DataContainer'.\DIRECTORY_SEPARATOR.'DisableAppConfiguredSettingsListener.php'), 21 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'InsertTags'.\DIRECTORY_SEPARATOR.'TranslationListener.php'), 22 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LocaleSubscriber.php'), 23 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'BackendCsvImportController.php'), 24 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Crawl'.\DIRECTORY_SEPARATOR.'Escargot'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'BrokenLinkCheckerSubscriber.php'), 25 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'terminal42'.\DIRECTORY_SEPARATOR.'escargot'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EscargotAwareTrait.php'), 26 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'LoggerAwareTrait.php'), 27 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'terminal42'.\DIRECTORY_SEPARATOR.'escargot'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'SubscriberLoggerTrait.php'), 28 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Crawl'.\DIRECTORY_SEPARATOR.'Escargot'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'SearchIndexSubscriber.php'), 29 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'terminal42'.\DIRECTORY_SEPARATOR.'escargot'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EscargotAwareTrait.php'), 30 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'LoggerAwareTrait.php'), 31 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'terminal42'.\DIRECTORY_SEPARATOR.'escargot'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'SubscriberLoggerTrait.php'), 32 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'ImageSizes.php'), 33 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Intl'.\DIRECTORY_SEPARATOR.'Countries.php'), 34 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Intl'.\DIRECTORY_SEPARATOR.'Locales.php'), 35 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Mailer'.\DIRECTORY_SEPARATOR.'AvailableTransports.php'), 36 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Picker'.\DIRECTORY_SEPARATOR.'PagePickerProvider.php'), 37 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Picker'.\DIRECTORY_SEPARATOR.'FilePickerProvider.php'), 38 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Framework'.\DIRECTORY_SEPARATOR.'FrameworkAwareTrait.php'), 39 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Picker'.\DIRECTORY_SEPARATOR.'ArticlePickerProvider.php'), 40 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Picker'.\DIRECTORY_SEPARATOR.'TablePickerProvider.php'), 41 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Slug'.\DIRECTORY_SEPARATOR.'ValidCharacters.php'), 42 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Migration'.\DIRECTORY_SEPARATOR.'Version404'.\DIRECTORY_SEPARATOR.'Version447Update.php'), 43 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DataContainer'.\DIRECTORY_SEPARATOR.'LegacyRoutingListener.php'), 44 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'BackendMenuListener.php')]);

$instance->setName('debug:translation');

return $instance;
