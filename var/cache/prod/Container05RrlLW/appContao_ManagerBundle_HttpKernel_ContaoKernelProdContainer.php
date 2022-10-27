<?php

namespace Container05RrlLW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class appContao_ManagerBundle_HttpKernel_ContaoKernelProdContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'contao_manager.jwt_manager' => true,
            'contao_manager.plugin_loader' => true,
            'kernel' => true,
        ];
        $this->methodMap = [
            'Contao\\CoreBundle\\Csrf\\ContaoCsrfTokenManager' => 'getContaoCsrfTokenManagerService',
            'Contao\\CoreBundle\\Intl\\Locales' => 'getLocalesService',
            'Contao\\CoreBundle\\Twig\\Extension\\ContaoExtension' => 'getContaoExtensionService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.system' => 'getCache_SystemService',
            'contao.assets.assets_context' => 'getContao_Assets_AssetsContextService',
            'contao.framework' => 'getContao_FrameworkService',
            'contao.resource_finder' => 'getContao_ResourceFinderService',
            'contao.routing.nested_404_matcher' => 'getContao_Routing_Nested404MatcherService',
            'contao.routing.nested_matcher' => 'getContao_Routing_NestedMatcherService',
            'contao.routing.scope_matcher' => 'getContao_Routing_ScopeMatcherService',
            'contao.security.token_checker' => 'getContao_Security_TokenCheckerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'fos_http_cache.cache_manager' => 'getFosHttpCache_CacheManagerService',
            'fos_http_cache.http.symfony_response_tagger' => 'getFosHttpCache_Http_SymfonyResponseTaggerService',
            'fos_http_cache.proxy_client.symfony' => 'getFosHttpCache_ProxyClient_SymfonyService',
            'http_kernel' => 'getHttpKernelService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'lexik_maintenance.driver.factory' => 'getLexikMaintenance_Driver_FactoryService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.helper' => 'getSecurity_HelperService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'session' => 'getSessionService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'uri_signer' => 'getUriSignerService',
            'contao.csrf.token_manager' => 'getContao_Csrf_TokenManagerService',
        ];
        $this->fileMap = [
            'Contao\\CoreBundle\\Controller\\BackendController' => 'getBackendControllerService.php',
            'Contao\\CoreBundle\\Controller\\BackendCsvImportController' => 'getBackendCsvImportControllerService.php',
            'Contao\\CoreBundle\\Controller\\BackendPreviewController' => 'getBackendPreviewControllerService.php',
            'Contao\\CoreBundle\\Controller\\BackendPreviewSwitchController' => 'getBackendPreviewSwitchControllerService.php',
            'Contao\\CoreBundle\\Controller\\ContentElement\\MarkdownController' => 'getMarkdownControllerService.php',
            'Contao\\CoreBundle\\Controller\\FaviconController' => 'getFaviconControllerService.php',
            'Contao\\CoreBundle\\Controller\\FrontendController' => 'getFrontendControllerService.php',
            'Contao\\CoreBundle\\Controller\\FrontendModule\\TwoFactorController' => 'getTwoFactorControllerService.php',
            'Contao\\CoreBundle\\Controller\\ImagesController' => 'getImagesControllerService.php',
            'Contao\\CoreBundle\\Controller\\InitializeController' => 'getInitializeControllerService.php',
            'Contao\\CoreBundle\\Controller\\InsertTagsController' => 'getInsertTagsControllerService.php',
            'Contao\\CoreBundle\\Controller\\Page\\RootPageController' => 'getRootPageControllerService.php',
            'Contao\\CoreBundle\\Controller\\RobotsTxtController' => 'getRobotsTxtControllerService.php',
            'Contao\\CoreBundle\\Controller\\SitemapController' => 'getSitemapControllerService.php',
            'Contao\\CoreBundle\\Cron\\Cron' => 'getCronService.php',
            'Contao\\CoreBundle\\EventListener\\DataContainer\\ContentCompositionListener' => 'getContentCompositionListenerService.php',
            'Contao\\CoreBundle\\EventListener\\DataContainer\\DisableAppConfiguredSettingsListener' => 'getDisableAppConfiguredSettingsListenerService.php',
            'Contao\\CoreBundle\\EventListener\\DataContainer\\LegacyRoutingListener' => 'getLegacyRoutingListenerService.php',
            'Contao\\CoreBundle\\EventListener\\DataContainer\\MemberGroupsListener' => 'getMemberGroupsListenerService.php',
            'Contao\\CoreBundle\\EventListener\\DataContainer\\PageTypeOptionsListener' => 'getPageTypeOptionsListenerService.php',
            'Contao\\CoreBundle\\EventListener\\DataContainer\\PageUrlListener' => 'getPageUrlListenerService.php',
            'Contao\\CoreBundle\\EventListener\\DataContainer\\PageUseSslDefaultListener' => 'getPageUseSslDefaultListenerService.php',
            'Contao\\CoreBundle\\EventListener\\DataContainer\\ResetCustomTemplateListener' => 'getResetCustomTemplateListenerService.php',
            'Contao\\CoreBundle\\EventListener\\DataContainer\\ThemeTemplatesListener' => 'getThemeTemplatesListenerService.php',
            'Contao\\CoreBundle\\EventListener\\DataContainer\\ValidateCustomRgxpListener' => 'getValidateCustomRgxpListenerService.php',
            'Contao\\CoreBundle\\EventListener\\InsertTags\\DateListener' => 'getDateListenerService.php',
            'Contao\\CoreBundle\\EventListener\\Widget\\CustomRgxpListener' => 'getCustomRgxpListenerService.php',
            'Contao\\CoreBundle\\EventListener\\Widget\\HttpUrlListener' => 'getHttpUrlListenerService.php',
            'Contao\\CoreBundle\\Image\\Studio\\FigureRenderer' => 'getFigureRendererService.php',
            'Contao\\CoreBundle\\Image\\Studio\\Studio' => 'getStudioService.php',
            'Contao\\CoreBundle\\Intl\\Countries' => 'getCountriesService.php',
            'Contao\\CoreBundle\\Mailer\\AvailableTransports' => 'getAvailableTransportsService.php',
            'Contao\\CoreBundle\\Routing\\ResponseContext\\CoreResponseContextFactory' => 'getCoreResponseContextFactoryService.php',
            'Contao\\CoreBundle\\Routing\\ResponseContext\\ResponseContextAccessor' => 'getResponseContextAccessorService.php',
            'Contao\\CoreBundle\\Security\\TwoFactor\\BackupCodeManager' => 'getBackupCodeManagerService.php',
            'Contao\\CoreBundle\\Util\\SimpleTokenParser' => 'getSimpleTokenParserService.php',
            'Contao\\ManagerBundle\\Controller\\DebugController' => 'getDebugControllerService.php',
            'Scheb\\TwoFactorBundle\\Model\\PersisterInterface' => 'getPersisterInterfaceService.php',
            'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\TwoFactorFormRendererInterface' => 'getTwoFactorFormRendererInterfaceService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverLockCommand' => 'getDriverLockCommandService.php',
            'console.command.public_alias.Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverUnlockCommand' => 'getDriverUnlockCommandService.php',
            'console.command.public_alias.contao.command.install-web-dir' => 'getConsole_Command_PublicAlias_Contao_Command_InstallwebdirService.php',
            'console.command.public_alias.contao.command.lock' => 'getConsole_Command_PublicAlias_Contao_Command_LockService.php',
            'console.command.public_alias.contao.command.unlock' => 'getConsole_Command_PublicAlias_Contao_Command_UnlockService.php',
            'console.command.public_alias.fos_http_cache.command.clear' => 'getConsole_Command_PublicAlias_FosHttpCache_Command_ClearService.php',
            'console.command.public_alias.fos_http_cache.command.invalidate_path' => 'getConsole_Command_PublicAlias_FosHttpCache_Command_InvalidatePathService.php',
            'console.command.public_alias.fos_http_cache.command.invalidate_regex' => 'getConsole_Command_PublicAlias_FosHttpCache_Command_InvalidateRegexService.php',
            'console.command.public_alias.fos_http_cache.command.refresh_path' => 'getConsole_Command_PublicAlias_FosHttpCache_Command_RefreshPathService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService.php',
            'contao.assets.files_context' => 'getContao_Assets_FilesContextService.php',
            'contao.cache.clear_internal' => 'getContao_Cache_ClearInternalService.php',
            'contao.cache.warm_internal' => 'getContao_Cache_WarmInternalService.php',
            'contao.command.install' => 'getContao_Command_InstallService.php',
            'contao.command.symlinks' => 'getContao_Command_SymlinksService.php',
            'contao.crawl.escargot_factory' => 'getContao_Crawl_EscargotFactoryService.php',
            'contao.fragment._contao.content_element.markdown' => 'getContao_Fragment_Contao_ContentElement_MarkdownService.php',
            'contao.fragment._contao.frontend_module.two_factor' => 'getContao_Fragment_Contao_FrontendModule_TwoFactorService.php',
            'contao.image.image_factory' => 'getContao_Image_ImageFactoryService.php',
            'contao.image.image_sizes' => 'getContao_Image_ImageSizesService.php',
            'contao.image.imagine' => 'getContao_Image_ImagineService.php',
            'contao.image.imagine_svg' => 'getContao_Image_ImagineSvgService.php',
            'contao.image.picture_factory' => 'getContao_Image_PictureFactoryService.php',
            'contao.image.picture_generator' => 'getContao_Image_PictureGeneratorService.php',
            'contao.image.resizer' => 'getContao_Image_ResizerService.php',
            'contao.install_tool' => 'getContao_InstallToolService.php',
            'contao.install_tool_user' => 'getContao_InstallToolUserService.php',
            'contao.installer' => 'getContao_InstallerService.php',
            'contao.listener.Z6uZ2NA' => 'getContao_Listener_Z6uZ2NAService.php',
            'contao.listener.data_container_callback' => 'getContao_Listener_DataContainerCallbackService.php',
            'contao.listener.element_template_options' => 'getContao_Listener_ElementTemplateOptionsService.php',
            'contao.listener.insert_tags.asset' => 'getContao_Listener_InsertTags_AssetService.php',
            'contao.listener.insert_tags.translation' => 'getContao_Listener_InsertTags_TranslationService.php',
            'contao.listener.module_template_options' => 'getContao_Listener_ModuleTemplateOptionsService.php',
            'contao.listener.uCzBg4o' => 'getContao_Listener_UCzBg4oService.php',
            'contao.menu.backend_menu_builder' => 'getContao_Menu_BackendMenuBuilderService.php',
            'contao.menu.renderer' => 'getContao_Menu_RendererService.php',
            'contao.opt-in' => 'getContao_OptinService.php',
            'contao.picker.builder' => 'getContao_Picker_BuilderService.php',
            'contao.resource_locator' => 'getContao_ResourceLocatorService.php',
            'contao.routing.url_generator' => 'getContao_Routing_UrlGeneratorService.php',
            'contao.search.indexer' => 'getContao_Search_IndexerService.php',
            'contao.security.frontend_preview_authenticator' => 'getContao_Security_FrontendPreviewAuthenticatorService.php',
            'contao.security.two_factor.authenticator' => 'getContao_Security_TwoFactor_AuthenticatorService.php',
            'contao.security.two_factor.trusted_device_manager' => 'getContao_Security_TwoFactor_TrustedDeviceManagerService.php',
            'contao.slug' => 'getContao_SlugService.php',
            'contao.slug.generator' => 'getContao_Slug_GeneratorService.php',
            'contao.slug.valid_characters' => 'getContao_Slug_ValidCharactersService.php',
            'contao.twig.interop.context_factory' => 'getContao_Twig_Interop_ContextFactoryService.php',
            'contao_manager.routing_loader' => 'getContaoManager_RoutingLoaderService.php',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService.php',
            'error_controller' => 'getErrorControllerService.php',
            'fragment.handler' => 'getFragment_HandlerService.php',
            'knp_menu.factory' => 'getKnpMenu_FactoryService.php',
            'mailer' => 'getMailerService.php',
            'monolog.logger.contao' => 'getMonolog_Logger_ContaoService.php',
            'nelmio_security.csp_reporter_controller' => 'getNelmioSecurity_CspReporterControllerService.php',
            'nelmio_security.ua_parser.ua_php' => 'getNelmioSecurity_UaParser_UaPhpService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'scheb_two_factor.firewall_context' => 'getSchebTwoFactor_FirewallContextService.php',
            'scheb_two_factor.form_controller' => 'getSchebTwoFactor_FormControllerService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
        ];
        $this->aliases = [
            'FOS\\HttpCacheBundle\\CacheManager' => 'fos_http_cache.cache_manager',
            'FOS\\HttpCacheBundle\\Http\\SymfonyResponseTagger' => 'fos_http_cache.http.symfony_response_tagger',
            'FOS\\HttpCache\\ResponseTagger' => 'fos_http_cache.http.symfony_response_tagger',
            'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\TwoFactorFirewallContext' => 'scheb_two_factor.firewall_context',
            'contao.controller.backend_csv_import' => 'Contao\\CoreBundle\\Controller\\BackendCsvImportController',
            'contao.controller.images' => 'Contao\\CoreBundle\\Controller\\ImagesController',
            'contao.controller.insert_tags' => 'Contao\\CoreBundle\\Controller\\InsertTagsController',
            'contao_manager.controller.debug' => 'Contao\\ManagerBundle\\Controller\\DebugController',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'service-contracts'.\DIRECTORY_SEPARATOR.'ResetInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Registry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'Connection.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Connection.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Configuration.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'event-manager'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'EventManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'container'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ContainerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'service-contracts'.\DIRECTORY_SEPARATOR.'ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'service-contracts'.\DIRECTORY_SEPARATOR.'ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ServiceLocator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerNameParser.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher'.\DIRECTORY_SEPARATOR.'EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ResponseListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LocaleListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ErrorListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'ParameterBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'ContainerBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'event-dispatcher'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher-contracts'.\DIRECTORY_SEPARATOR.'EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher'.\DIRECTORY_SEPARATOR.'EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher'.\DIRECTORY_SEPARATOR.'EventDispatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'TerminableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpKernel.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'HttpKernel'.\DIRECTORY_SEPARATOR.'ControllerResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'ControllerMetadata'.\DIRECTORY_SEPARATOR.'ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'ControllerMetadata'.\DIRECTORY_SEPARATOR.'ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestStack.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'filesystem'.\DIRECTORY_SEPARATOR.'Filesystem.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'UriSigner.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'AdapterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache-contracts'.\DIRECTORY_SEPARATOR.'CacheInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'ResettableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache-contracts'.\DIRECTORY_SEPARATOR.'CacheTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'ContractsTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Session.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionBagInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Attribute'.\DIRECTORY_SEPARATOR.'AttributeBagInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Attribute'.\DIRECTORY_SEPARATOR.'AttributeBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Attribute'.\DIRECTORY_SEPARATOR.'ArrayAttributeBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'SessionStorageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'NativeSessionStorage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'MetadataBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'SessionListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'TokenGenerator'.\DIRECTORY_SEPARATOR.'TokenGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'TokenGenerator'.\DIRECTORY_SEPARATOR.'UriSafeTokenGenerator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Packages.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'PackageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Package.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'PathPackage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'VersionStrategy'.\DIRECTORY_SEPARATOR.'VersionStrategyInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'VersionStrategy'.\DIRECTORY_SEPARATOR.'EmptyVersionStrategy.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Context'.\DIRECTORY_SEPARATOR.'ContextInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Context'.\DIRECTORY_SEPARATOR.'RequestStackContext.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'VersionStrategy'.\DIRECTORY_SEPARATOR.'StaticVersionStrategy.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpCache'.\DIRECTORY_SEPARATOR.'SurrogateInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpCache'.\DIRECTORY_SEPARATOR.'AbstractSurrogate.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpCache'.\DIRECTORY_SEPARATOR.'Esi.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'SurrogateListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'FragmentListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation-contracts'.\DIRECTORY_SEPARATOR.'LocaleAwareInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation-contracts'.\DIRECTORY_SEPARATOR.'TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'TranslatorBagInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Translator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'WarmableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Translator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'MessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'IntlFormatterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'ChoiceMessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'MessageFormatter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation-contracts'.\DIRECTORY_SEPARATOR.'TranslatorTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'IdentityTranslator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'stopwatch'.\DIRECTORY_SEPARATOR.'Stopwatch.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'RequestContext.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'RouterListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'PruneableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'ProxyTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'PhpArrayAdapter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'LoggerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'ResettableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Logger.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bridge'.\DIRECTORY_SEPARATOR.'Logger.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'Handler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'ProcessableHandlerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'FormattableHandlerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'ProcessableHandlerTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'FingersCrossedHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AbstractHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'FormattableHandlerTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'StreamHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'RotatingFileHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'FingersCrossed'.\DIRECTORY_SEPARATOR.'ActivationStrategyInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'FingersCrossed'.\DIRECTORY_SEPARATOR.'ErrorLevelActivationStrategy.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bridge'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'FingersCrossed'.\DIRECTORY_SEPARATOR.'HttpCodeActivationStrategy.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'PsrLogMessageProcessor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bridge'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'ConsoleHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'RuleMatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'RuleMatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'RequestMatcher'.\DIRECTORY_SEPARATOR.'UnsafeRequestMatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'ResponseMatcher'.\DIRECTORY_SEPARATOR.'ResponseMatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'ResponseMatcher'.\DIRECTORY_SEPARATOR.'NonErrorResponseMatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'ProxyClient.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'HttpProxyClient.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'Invalidation'.\DIRECTORY_SEPARATOR.'PurgeCapable.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'Invalidation'.\DIRECTORY_SEPARATOR.'RefreshCapable.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'Invalidation'.\DIRECTORY_SEPARATOR.'TagCapable.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'Invalidation'.\DIRECTORY_SEPARATOR.'ClearCapable.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'Symfony.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ProxyClient'.\DIRECTORY_SEPARATOR.'Dispatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'SymfonyCache'.\DIRECTORY_SEPARATOR.'KernelDispatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CacheInvalidator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CacheManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ResponseTagger.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'SymfonyResponseTagger.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'TagHeaderFormatter'.\DIRECTORY_SEPARATOR.'TagHeaderFormatter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'TagHeaderFormatter'.\DIRECTORY_SEPARATOR.'MaxHeaderValueLengthFormatter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'TagHeaderFormatter'.\DIRECTORY_SEPARATOR.'CommaSeparatedTagHeaderFormatter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'AbstractRuleListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'TagListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'RequestMatcher'.\DIRECTORY_SEPARATOR.'CacheableRequestMatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'ResponseMatcher'.\DIRECTORY_SEPARATOR.'CacheableResponseMatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'cors-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CorsListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'cors-bundle'.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'ResolverInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'cors-bundle'.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'Resolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'cors-bundle'.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'ProviderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'cors-bundle'.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'ConfigProvider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Cors'.\DIRECTORY_SEPARATOR.'WebsiteRootsConfigProvider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'cors-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CacheableResponseVaryListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'AbstractContentTypeRestrictableListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ClickjackingListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ContentSecurityPolicyListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'ContentSecurityPolicy'.\DIRECTORY_SEPARATOR.'DirectiveSet.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'ContentSecurityPolicy'.\DIRECTORY_SEPARATOR.'PolicyManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'ContentSecurityPolicy'.\DIRECTORY_SEPARATOR.'NonceGenerator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'ContentSecurityPolicy'.\DIRECTORY_SEPARATOR.'ShaComputer.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'XssProtectionListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ContentTypeListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ReferrerPolicyListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TwoFactorProviderRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'PreparationRecorderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TokenPreparationRecorder.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'MatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'Matcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Environment.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ChainLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FailTolerantFilesystemLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'AbstractExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CsrfExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TranslationExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'AssetExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CodeExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'RoutingExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'YamlExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'StopwatchExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ExpressionExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'UrlHelper.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'SecurityExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'DoctrineExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'CacheTagExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'NelmioCSPTwigExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'MenuExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Helper.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'RendererProviderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'PsrProvider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'MenuProviderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'ChainProvider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'MenuManipulator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TimeExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle'.\DIRECTORY_SEPARATOR.'DateTimeFormatter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensiolabs'.\DIRECTORY_SEPARATOR.'ansi-to-html'.\DIRECTORY_SEPARATOR.'SensioLabs'.\DIRECTORY_SEPARATOR.'AnsiConverter'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'AnsiExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'AppVariable.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RuntimeLoader'.\DIRECTORY_SEPARATOR.'RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RuntimeLoader'.\DIRECTORY_SEPARATOR.'ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'maintenance-bundle-deprecated'.\DIRECTORY_SEPARATOR.'Drivers'.\DIRECTORY_SEPARATOR.'DriverFactory.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'maintenance-bundle-deprecated'.\DIRECTORY_SEPARATOR.'Drivers'.\DIRECTORY_SEPARATOR.'AbstractDriver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'maintenance-bundle-deprecated'.\DIRECTORY_SEPARATOR.'Drivers'.\DIRECTORY_SEPARATOR.'DriverTtlInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'maintenance-bundle-deprecated'.\DIRECTORY_SEPARATOR.'Drivers'.\DIRECTORY_SEPARATOR.'DatabaseDriver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'maintenance-bundle-deprecated'.\DIRECTORY_SEPARATOR.'Listener'.\DIRECTORY_SEPARATOR.'MaintenanceListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'service-contracts'.\DIRECTORY_SEPARATOR.'ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'TokenStorage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Security.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'VoterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'RoleVoter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'FirewallListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'FirewallMap.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'RememberMe'.\DIRECTORY_SEPARATOR.'ResponseListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TwoFactorProviderPreparationListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'BackendRebuildCacheMessageListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'BackendLocaleListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'BackendPreviewRedirectListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'BypassMaintenanceListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ClearSessionDataListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CsrfTokenCookieSubscriber.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'InterestCohortListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'InitializeControllerListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'InsecureInstallationListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LocaleSubscriber.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'MakeResponsePrivateListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'MergeHttpHeadersListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'PreviewToolbarListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'PreviewAuthenticationListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'RefererIdListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'RequestTokenListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'StoreRefererListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'SubrequestCacheSubscriber.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TargetPathTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'TwoFactorFrontendListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'UserSessionListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Asset'.\DIRECTORY_SEPARATOR.'ContaoContext.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'CsrfTokenManagerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'CsrfTokenManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'ContaoCsrfTokenManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'TokenStorage'.\DIRECTORY_SEPARATOR.'TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'MemoryTokenStorage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'FragmentRegistryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'FragmentRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ContaoFrameworkInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Framework'.\DIRECTORY_SEPARATOR.'ContaoFrameworkInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ContainerAwareInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ContainerAwareTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Framework'.\DIRECTORY_SEPARATOR.'ContaoFramework.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Intl'.\DIRECTORY_SEPARATOR.'Locales.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'ContaoTableHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'ContaoTableProcessor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'ResourceFinderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'ResourceFinder.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestMatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'NestedMatcher'.\DIRECTORY_SEPARATOR.'RouteFilterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'DomainFilter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'UrlMatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'RedirectableUrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'RedirectableUrlMatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'NestedMatcher'.\DIRECTORY_SEPARATOR.'FinalMatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'UrlMatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'NestedMatcher'.\DIRECTORY_SEPARATOR.'NestedMatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Page'.\DIRECTORY_SEPARATOR.'PageRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Page'.\DIRECTORY_SEPARATOR.'RouteConfig.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'PublishedFilter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RouteProviderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'AbstractPageRouteProvider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'RouteProvider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Candidates'.\DIRECTORY_SEPARATOR.'CandidatesInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Candidates'.\DIRECTORY_SEPARATOR.'AbstractCandidates.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Candidates'.\DIRECTORY_SEPARATOR.'LegacyCandidates.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Route404Provider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Candidates'.\DIRECTORY_SEPARATOR.'LocaleCandidates.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'ScopeMatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'TokenChecker.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ContaoExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ThemeNamespace.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'TemplateLocator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Inheritance'.\DIRECTORY_SEPARATOR.'TemplateHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ContaoFilesystemLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ContaoFilesystemLoaderWarmer.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'Loader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'FrontendLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'FragmentConfig.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Translator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'RouterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ChainRouterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ChainRouter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Router.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Router.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'VersatileGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ChainedRouterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Enhancer'.\DIRECTORY_SEPARATOR.'RouteEnhancerTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DynamicRouter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'ConfigurableRequirementsInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'UrlGenerator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'PageUrlGenerator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Enhancer'.\DIRECTORY_SEPARATOR.'RouteEnhancerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Enhancer'.\DIRECTORY_SEPARATOR.'InputEnhancer.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ProviderBasedGenerator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'LegacyRouteProvider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'LegacyMatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'LanguageFilter.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || $this->load("{$class}.php");

        return $factory();
    }

    /*
     * Gets the public 'Contao\CoreBundle\Csrf\ContaoCsrfTokenManager' shared service.
     *
     * @return \Contao\CoreBundle\Csrf\ContaoCsrfTokenManager
     */
    protected function getContaoCsrfTokenManagerService()
    {
        return $this->services['Contao\\CoreBundle\\Csrf\\ContaoCsrfTokenManager'] = new \Contao\CoreBundle\Csrf\ContaoCsrfTokenManager(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'csrf_', ($this->privates['security.csrf.token_generator'] ?? ($this->privates['security.csrf.token_generator'] = new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator())), ($this->privates['contao.csrf.token_storage'] ?? ($this->privates['contao.csrf.token_storage'] = new \Contao\CoreBundle\Csrf\MemoryTokenStorage())));
    }

    /*
     * Gets the public 'Contao\CoreBundle\Intl\Locales' shared service.
     *
     * @return \Contao\CoreBundle\Intl\Locales
     */
    protected function getLocalesService()
    {
        return $this->services['Contao\\CoreBundle\\Intl\\Locales'] = new \Contao\CoreBundle\Intl\Locales(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), [0 => 'en', 1 => 'cs', 2 => 'de', 3 => 'es', 4 => 'fa', 5 => 'fr', 6 => 'it', 7 => 'ja', 8 => 'lv', 9 => 'nl', 10 => 'pl', 11 => 'ru', 12 => 'sl', 13 => 'sr', 14 => 'sv', 15 => 'zh', 16 => 'af', 17 => 'af_NA', 18 => 'af_ZA', 19 => 'agq', 20 => 'agq_CM', 21 => 'ak', 22 => 'ak_GH', 23 => 'am', 24 => 'am_ET', 25 => 'ar', 26 => 'ar_001', 27 => 'ar_AE', 28 => 'ar_BH', 29 => 'ar_DJ', 30 => 'ar_DZ', 31 => 'ar_EG', 32 => 'ar_EH', 33 => 'ar_ER', 34 => 'ar_IL', 35 => 'ar_IQ', 36 => 'ar_JO', 37 => 'ar_KM', 38 => 'ar_KW', 39 => 'ar_LB', 40 => 'ar_LY', 41 => 'ar_MA', 42 => 'ar_MR', 43 => 'ar_OM', 44 => 'ar_PS', 45 => 'ar_QA', 46 => 'ar_SA', 47 => 'ar_SD', 48 => 'ar_SO', 49 => 'ar_SS', 50 => 'ar_SY', 51 => 'ar_TD', 52 => 'ar_TN', 53 => 'ar_YE', 54 => 'as', 55 => 'as_IN', 56 => 'asa', 57 => 'asa_TZ', 58 => 'ast', 59 => 'ast_ES', 60 => 'az', 61 => 'az_Cyrl', 62 => 'az_Cyrl_AZ', 63 => 'az_Latn', 64 => 'az_Latn_AZ', 65 => 'bas', 66 => 'bas_CM', 67 => 'be', 68 => 'be_BY', 69 => 'bem', 70 => 'bem_ZM', 71 => 'bez', 72 => 'bez_TZ', 73 => 'bg', 74 => 'bg_BG', 75 => 'bm', 76 => 'bm_ML', 77 => 'bn', 78 => 'bn_BD', 79 => 'bn_IN', 80 => 'bo', 81 => 'bo_CN', 82 => 'bo_IN', 83 => 'br', 84 => 'br_FR', 85 => 'brx', 86 => 'brx_IN', 87 => 'bs', 88 => 'bs_Cyrl', 89 => 'bs_Cyrl_BA', 90 => 'bs_Latn', 91 => 'bs_Latn_BA', 92 => 'ca', 93 => 'ca_AD', 94 => 'ca_ES', 95 => 'ca_FR', 96 => 'ca_IT', 97 => 'ccp', 98 => 'ccp_BD', 99 => 'ccp_IN', 100 => 'ce', 101 => 'ce_RU', 102 => 'ceb', 103 => 'ceb_PH', 104 => 'cgg', 105 => 'cgg_UG', 106 => 'chr', 107 => 'chr_US', 108 => 'ckb', 109 => 'ckb_IQ', 110 => 'ckb_IR', 111 => 'cs_CZ', 112 => 'cy', 113 => 'cy_GB', 114 => 'da', 115 => 'da_DK', 116 => 'da_GL', 117 => 'dav', 118 => 'dav_KE', 119 => 'de_AT', 120 => 'de_BE', 121 => 'de_CH', 122 => 'de_DE', 123 => 'de_IT', 124 => 'de_LI', 125 => 'de_LU', 126 => 'dje', 127 => 'dje_NE', 128 => 'dsb', 129 => 'dsb_DE', 130 => 'dua', 131 => 'dua_CM', 132 => 'dyo', 133 => 'dyo_SN', 134 => 'dz', 135 => 'dz_BT', 136 => 'ebu', 137 => 'ebu_KE', 138 => 'ee', 139 => 'ee_GH', 140 => 'ee_TG', 141 => 'el', 142 => 'el_CY', 143 => 'el_GR', 144 => 'en_001', 145 => 'en_150', 146 => 'en_AE', 147 => 'en_AG', 148 => 'en_AI', 149 => 'en_AS', 150 => 'en_AT', 151 => 'en_AU', 152 => 'en_BB', 153 => 'en_BE', 154 => 'en_BI', 155 => 'en_BM', 156 => 'en_BS', 157 => 'en_BW', 158 => 'en_BZ', 159 => 'en_CA', 160 => 'en_CC', 161 => 'en_CH', 162 => 'en_CK', 163 => 'en_CM', 164 => 'en_CX', 165 => 'en_CY', 166 => 'en_DE', 167 => 'en_DG', 168 => 'en_DK', 169 => 'en_DM', 170 => 'en_ER', 171 => 'en_FI', 172 => 'en_FJ', 173 => 'en_FK', 174 => 'en_FM', 175 => 'en_GB', 176 => 'en_GD', 177 => 'en_GG', 178 => 'en_GH', 179 => 'en_GI', 180 => 'en_GM', 181 => 'en_GU', 182 => 'en_GY', 183 => 'en_HK', 184 => 'en_IE', 185 => 'en_IL', 186 => 'en_IM', 187 => 'en_IN', 188 => 'en_IO', 189 => 'en_JE', 190 => 'en_JM', 191 => 'en_KE', 192 => 'en_KI', 193 => 'en_KN', 194 => 'en_KY', 195 => 'en_LC', 196 => 'en_LR', 197 => 'en_LS', 198 => 'en_MG', 199 => 'en_MH', 200 => 'en_MO', 201 => 'en_MP', 202 => 'en_MS', 203 => 'en_MT', 204 => 'en_MU', 205 => 'en_MW', 206 => 'en_MY', 207 => 'en_NA', 208 => 'en_NF', 209 => 'en_NG', 210 => 'en_NL', 211 => 'en_NR', 212 => 'en_NU', 213 => 'en_NZ', 214 => 'en_PG', 215 => 'en_PH', 216 => 'en_PK', 217 => 'en_PN', 218 => 'en_PR', 219 => 'en_PW', 220 => 'en_RW', 221 => 'en_SB', 222 => 'en_SC', 223 => 'en_SD', 224 => 'en_SE', 225 => 'en_SG', 226 => 'en_SH', 227 => 'en_SI', 228 => 'en_SL', 229 => 'en_SS', 230 => 'en_SX', 231 => 'en_SZ', 232 => 'en_TC', 233 => 'en_TK', 234 => 'en_TO', 235 => 'en_TT', 236 => 'en_TV', 237 => 'en_TZ', 238 => 'en_UG', 239 => 'en_UM', 240 => 'en_US', 241 => 'en_US_POSIX', 242 => 'en_VC', 243 => 'en_VG', 244 => 'en_VI', 245 => 'en_VU', 246 => 'en_WS', 247 => 'en_ZA', 248 => 'en_ZM', 249 => 'en_ZW', 250 => 'eo', 251 => 'eo_001', 252 => 'es_419', 253 => 'es_AR', 254 => 'es_BO', 255 => 'es_BR', 256 => 'es_BZ', 257 => 'es_CL', 258 => 'es_CO', 259 => 'es_CR', 260 => 'es_CU', 261 => 'es_DO', 262 => 'es_EA', 263 => 'es_EC', 264 => 'es_ES', 265 => 'es_GQ', 266 => 'es_GT', 267 => 'es_HN', 268 => 'es_IC', 269 => 'es_MX', 270 => 'es_NI', 271 => 'es_PA', 272 => 'es_PE', 273 => 'es_PH', 274 => 'es_PR', 275 => 'es_PY', 276 => 'es_SV', 277 => 'es_US', 278 => 'es_UY', 279 => 'es_VE', 280 => 'et', 281 => 'et_EE', 282 => 'eu', 283 => 'eu_ES', 284 => 'ewo', 285 => 'ewo_CM', 286 => 'fa_AF', 287 => 'fa_IR', 288 => 'ff', 289 => 'ff_Latn', 290 => 'ff_Latn_BF', 291 => 'ff_Latn_CM', 292 => 'ff_Latn_GH', 293 => 'ff_Latn_GM', 294 => 'ff_Latn_GN', 295 => 'ff_Latn_GW', 296 => 'ff_Latn_LR', 297 => 'ff_Latn_MR', 298 => 'ff_Latn_NE', 299 => 'ff_Latn_NG', 300 => 'ff_Latn_SL', 301 => 'ff_Latn_SN', 302 => 'fi', 303 => 'fi_FI', 304 => 'fil', 305 => 'fil_PH', 306 => 'fo', 307 => 'fo_DK', 308 => 'fo_FO', 309 => 'fr_BE', 310 => 'fr_BF', 311 => 'fr_BI', 312 => 'fr_BJ', 313 => 'fr_BL', 314 => 'fr_CA', 315 => 'fr_CD', 316 => 'fr_CF', 317 => 'fr_CG', 318 => 'fr_CH', 319 => 'fr_CI', 320 => 'fr_CM', 321 => 'fr_DJ', 322 => 'fr_DZ', 323 => 'fr_FR', 324 => 'fr_GA', 325 => 'fr_GF', 326 => 'fr_GN', 327 => 'fr_GP', 328 => 'fr_GQ', 329 => 'fr_HT', 330 => 'fr_KM', 331 => 'fr_LU', 332 => 'fr_MA', 333 => 'fr_MC', 334 => 'fr_MF', 335 => 'fr_MG', 336 => 'fr_ML', 337 => 'fr_MQ', 338 => 'fr_MR', 339 => 'fr_MU', 340 => 'fr_NC', 341 => 'fr_NE', 342 => 'fr_PF', 343 => 'fr_PM', 344 => 'fr_RE', 345 => 'fr_RW', 346 => 'fr_SC', 347 => 'fr_SN', 348 => 'fr_SY', 349 => 'fr_TD', 350 => 'fr_TG', 351 => 'fr_TN', 352 => 'fr_VU', 353 => 'fr_WF', 354 => 'fr_YT', 355 => 'fur', 356 => 'fur_IT', 357 => 'fy', 358 => 'fy_NL', 359 => 'ga', 360 => 'ga_GB', 361 => 'ga_IE', 362 => 'gd', 363 => 'gd_GB', 364 => 'gl', 365 => 'gl_ES', 366 => 'gsw', 367 => 'gsw_CH', 368 => 'gsw_FR', 369 => 'gsw_LI', 370 => 'gu', 371 => 'gu_IN', 372 => 'guz', 373 => 'guz_KE', 374 => 'gv', 375 => 'gv_IM', 376 => 'ha', 377 => 'ha_GH', 378 => 'ha_NE', 379 => 'ha_NG', 380 => 'haw', 381 => 'haw_US', 382 => 'he', 383 => 'he_IL', 384 => 'hi', 385 => 'hi_IN', 386 => 'hr', 387 => 'hr_BA', 388 => 'hr_HR', 389 => 'hsb', 390 => 'hsb_DE', 391 => 'hu', 392 => 'hu_HU', 393 => 'hy', 394 => 'hy_AM', 395 => 'ia', 396 => 'ia_001', 397 => 'id', 398 => 'id_ID', 399 => 'ig', 400 => 'ig_NG', 401 => 'ii', 402 => 'ii_CN', 403 => 'is', 404 => 'is_IS', 405 => 'it_CH', 406 => 'it_IT', 407 => 'it_SM', 408 => 'it_VA', 409 => 'ja_JP', 410 => 'jgo', 411 => 'jgo_CM', 412 => 'jmc', 413 => 'jmc_TZ', 414 => 'jv', 415 => 'jv_ID', 416 => 'ka', 417 => 'ka_GE', 418 => 'kab', 419 => 'kab_DZ', 420 => 'kam', 421 => 'kam_KE', 422 => 'kde', 423 => 'kde_TZ', 424 => 'kea', 425 => 'kea_CV', 426 => 'khq', 427 => 'khq_ML', 428 => 'ki', 429 => 'ki_KE', 430 => 'kk', 431 => 'kk_KZ', 432 => 'kkj', 433 => 'kkj_CM', 434 => 'kl', 435 => 'kl_GL', 436 => 'kln', 437 => 'kln_KE', 438 => 'km', 439 => 'km_KH', 440 => 'kn', 441 => 'kn_IN', 442 => 'ko', 443 => 'ko_KP', 444 => 'ko_KR', 445 => 'kok', 446 => 'kok_IN', 447 => 'ks', 448 => 'ks_IN', 449 => 'ksb', 450 => 'ksb_TZ', 451 => 'ksf', 452 => 'ksf_CM', 453 => 'ksh', 454 => 'ksh_DE', 455 => 'ku', 456 => 'ku_TR', 457 => 'kw', 458 => 'kw_GB', 459 => 'ky', 460 => 'ky_KG', 461 => 'lag', 462 => 'lag_TZ', 463 => 'lb', 464 => 'lb_LU', 465 => 'lg', 466 => 'lg_UG', 467 => 'lkt', 468 => 'lkt_US', 469 => 'ln', 470 => 'ln_AO', 471 => 'ln_CD', 472 => 'ln_CF', 473 => 'ln_CG', 474 => 'lo', 475 => 'lo_LA', 476 => 'lrc', 477 => 'lrc_IQ', 478 => 'lrc_IR', 479 => 'lt', 480 => 'lt_LT', 481 => 'lu', 482 => 'lu_CD', 483 => 'luo', 484 => 'luo_KE', 485 => 'luy', 486 => 'luy_KE', 487 => 'lv_LV', 488 => 'mas', 489 => 'mas_KE', 490 => 'mas_TZ', 491 => 'mer', 492 => 'mer_KE', 493 => 'mfe', 494 => 'mfe_MU', 495 => 'mg', 496 => 'mg_MG', 497 => 'mgh', 498 => 'mgh_MZ', 499 => 'mgo', 500 => 'mgo_CM', 501 => 'mi', 502 => 'mi_NZ', 503 => 'mk', 504 => 'mk_MK', 505 => 'ml', 506 => 'ml_IN', 507 => 'mn', 508 => 'mn_MN', 509 => 'mr', 510 => 'mr_IN', 511 => 'ms', 512 => 'ms_BN', 513 => 'ms_MY', 514 => 'ms_SG', 515 => 'mt', 516 => 'mt_MT', 517 => 'mua', 518 => 'mua_CM', 519 => 'my', 520 => 'my_MM', 521 => 'mzn', 522 => 'mzn_IR', 523 => 'naq', 524 => 'naq_NA', 525 => 'nb', 526 => 'nb_NO', 527 => 'nb_SJ', 528 => 'nd', 529 => 'nd_ZW', 530 => 'nds', 531 => 'nds_DE', 532 => 'nds_NL', 533 => 'ne', 534 => 'ne_IN', 535 => 'ne_NP', 536 => 'nl_AW', 537 => 'nl_BE', 538 => 'nl_BQ', 539 => 'nl_CW', 540 => 'nl_NL', 541 => 'nl_SR', 542 => 'nl_SX', 543 => 'nmg', 544 => 'nmg_CM', 545 => 'nn', 546 => 'nn_NO', 547 => 'nnh', 548 => 'nnh_CM', 549 => 'nus', 550 => 'nus_SS', 551 => 'nyn', 552 => 'nyn_UG', 553 => 'om', 554 => 'om_ET', 555 => 'om_KE', 556 => 'or', 557 => 'or_IN', 558 => 'os', 559 => 'os_GE', 560 => 'os_RU', 561 => 'pa', 562 => 'pa_Arab', 563 => 'pa_Arab_PK', 564 => 'pa_Guru', 565 => 'pa_Guru_IN', 566 => 'pl_PL', 567 => 'ps', 568 => 'ps_AF', 569 => 'ps_PK', 570 => 'pt', 571 => 'pt_AO', 572 => 'pt_BR', 573 => 'pt_CH', 574 => 'pt_CV', 575 => 'pt_GQ', 576 => 'pt_GW', 577 => 'pt_LU', 578 => 'pt_MO', 579 => 'pt_MZ', 580 => 'pt_PT', 581 => 'pt_ST', 582 => 'pt_TL', 583 => 'qu', 584 => 'qu_BO', 585 => 'qu_EC', 586 => 'qu_PE', 587 => 'rm', 588 => 'rm_CH', 589 => 'rn', 590 => 'rn_BI', 591 => 'ro', 592 => 'ro_MD', 593 => 'ro_RO', 594 => 'rof', 595 => 'rof_TZ', 596 => 'ru_BY', 597 => 'ru_KG', 598 => 'ru_KZ', 599 => 'ru_MD', 600 => 'ru_RU', 601 => 'ru_UA', 602 => 'rw', 603 => 'rw_RW', 604 => 'rwk', 605 => 'rwk_TZ', 606 => 'sah', 607 => 'sah_RU', 608 => 'saq', 609 => 'saq_KE', 610 => 'sbp', 611 => 'sbp_TZ', 612 => 'sd', 613 => 'sd_PK', 614 => 'se', 615 => 'se_FI', 616 => 'se_NO', 617 => 'se_SE', 618 => 'seh', 619 => 'seh_MZ', 620 => 'ses', 621 => 'ses_ML', 622 => 'sg', 623 => 'sg_CF', 624 => 'shi', 625 => 'shi_Latn', 626 => 'shi_Latn_MA', 627 => 'shi_Tfng', 628 => 'shi_Tfng_MA', 629 => 'si', 630 => 'si_LK', 631 => 'sk', 632 => 'sk_SK', 633 => 'sl_SI', 634 => 'smn', 635 => 'smn_FI', 636 => 'sn', 637 => 'sn_ZW', 638 => 'so', 639 => 'so_DJ', 640 => 'so_ET', 641 => 'so_KE', 642 => 'so_SO', 643 => 'sq', 644 => 'sq_AL', 645 => 'sq_MK', 646 => 'sq_XK', 647 => 'sr_Cyrl', 648 => 'sr_Cyrl_BA', 649 => 'sr_Cyrl_ME', 650 => 'sr_Cyrl_RS', 651 => 'sr_Cyrl_XK', 652 => 'sr_Latn', 653 => 'sr_Latn_BA', 654 => 'sr_Latn_ME', 655 => 'sr_Latn_RS', 656 => 'sr_Latn_XK', 657 => 'sv_AX', 658 => 'sv_FI', 659 => 'sv_SE', 660 => 'sw', 661 => 'sw_CD', 662 => 'sw_KE', 663 => 'sw_TZ', 664 => 'sw_UG', 665 => 'ta', 666 => 'ta_IN', 667 => 'ta_LK', 668 => 'ta_MY', 669 => 'ta_SG', 670 => 'te', 671 => 'te_IN', 672 => 'teo', 673 => 'teo_KE', 674 => 'teo_UG', 675 => 'tg', 676 => 'tg_TJ', 677 => 'th', 678 => 'th_TH', 679 => 'ti', 680 => 'ti_ER', 681 => 'ti_ET', 682 => 'tk', 683 => 'tk_TM', 684 => 'to', 685 => 'to_TO', 686 => 'tr', 687 => 'tr_CY', 688 => 'tr_TR', 689 => 'tt', 690 => 'tt_RU', 691 => 'twq', 692 => 'twq_NE', 693 => 'tzm', 694 => 'tzm_MA', 695 => 'ug', 696 => 'ug_CN', 697 => 'uk', 698 => 'uk_UA', 699 => 'ur', 700 => 'ur_IN', 701 => 'ur_PK', 702 => 'uz', 703 => 'uz_Arab', 704 => 'uz_Arab_AF', 705 => 'uz_Cyrl', 706 => 'uz_Cyrl_UZ', 707 => 'uz_Latn', 708 => 'uz_Latn_UZ', 709 => 'vai', 710 => 'vai_Latn', 711 => 'vai_Latn_LR', 712 => 'vai_Vaii', 713 => 'vai_Vaii_LR', 714 => 'vi', 715 => 'vi_VN', 716 => 'vun', 717 => 'vun_TZ', 718 => 'wae', 719 => 'wae_CH', 720 => 'wo', 721 => 'wo_SN', 722 => 'xh', 723 => 'xh_ZA', 724 => 'xog', 725 => 'xog_UG', 726 => 'yav', 727 => 'yav_CM', 728 => 'yi', 729 => 'yi_001', 730 => 'yo', 731 => 'yo_BJ', 732 => 'yo_NG', 733 => 'yue', 734 => 'yue_Hans', 735 => 'yue_Hans_CN', 736 => 'yue_Hant', 737 => 'yue_Hant_HK', 738 => 'zgh', 739 => 'zgh_MA', 740 => 'zh_Hans', 741 => 'zh_Hans_CN', 742 => 'zh_Hans_HK', 743 => 'zh_Hans_MO', 744 => 'zh_Hans_SG', 745 => 'zh_Hant', 746 => 'zh_Hant_HK', 747 => 'zh_Hant_MO', 748 => 'zh_Hant_TW', 749 => 'zu', 750 => 'zu_ZA'], $this->parameters['contao.locales'], [], [], 'en');
    }

    /*
     * Gets the public 'Contao\CoreBundle\Twig\Extension\ContaoExtension' shared service.
     *
     * @return \Contao\CoreBundle\Twig\Extension\ContaoExtension
     */
    protected function getContaoExtensionService()
    {
        $a = ($this->services['twig'] ?? $this->getTwigService());

        if (isset($this->services['Contao\\CoreBundle\\Twig\\Extension\\ContaoExtension'])) {
            return $this->services['Contao\\CoreBundle\\Twig\\Extension\\ContaoExtension'];
        }

        return $this->services['Contao\\CoreBundle\\Twig\\Extension\\ContaoExtension'] = new \Contao\CoreBundle\Twig\Extension\ContaoExtension($a, ($this->privates['Contao\\CoreBundle\\Twig\\Loader\\ContaoFilesystemLoader'] ?? $this->getContaoFilesystemLoaderService()));
    }

    /*
     * Gets the public 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        $a = new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy();

        $this->services['assets.packages'] = $instance = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', $a, new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);

        $b = ($this->services['contao.assets.assets_context'] ?? $this->getContao_Assets_AssetsContextService());

        $instance->addPackage('contao_core', new \Symfony\Component\Asset\PathPackage('bundles/contaocore', $a, $b));
        $instance->addPackage('contao-components/ace', new \Symfony\Component\Asset\PathPackage('assets/ace', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('1.11.2', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/chosen', new \Symfony\Component\Asset\PathPackage('assets/chosen', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('1.2.5', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/colorbox', new \Symfony\Component\Asset\PathPackage('assets/colorbox', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('1.6.6', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/colorpicker', new \Symfony\Component\Asset\PathPackage('assets/colorpicker', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('1.5.2', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/contao', new \Symfony\Component\Asset\PathPackage('assets/contao', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('9.3.2', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/datepicker', new \Symfony\Component\Asset\PathPackage('assets/datepicker', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('2.3.2', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/dropzone', new \Symfony\Component\Asset\PathPackage('assets/dropzone', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('5.9.3', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/jquery', new \Symfony\Component\Asset\PathPackage('assets/jquery', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('3.6.1', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/jquery-ui', new \Symfony\Component\Asset\PathPackage('assets/jquery-ui', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('1.13.1', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/mediabox', new \Symfony\Component\Asset\PathPackage('assets/mediabox', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('1.5.5', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/mootools', new \Symfony\Component\Asset\PathPackage('assets/mootools', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('1.6.0.6', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/simplemodal', new \Symfony\Component\Asset\PathPackage('assets/simplemodal', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('2.1.1', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/swipe', new \Symfony\Component\Asset\PathPackage('assets/swipe', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('2.2.0', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/tablesort', new \Symfony\Component\Asset\PathPackage('assets/tablesort', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('4.0.1', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/tablesorter', new \Symfony\Component\Asset\PathPackage('assets/tablesorter', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('2.31.3', '%s?v=%s'), $b));
        $instance->addPackage('contao-components/tinymce4', new \Symfony\Component\Asset\PathPackage('assets/tinymce4', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('5.10.5', '%s?v=%s'), $b));

        return $instance;
    }

    /*
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('7TVQnr4fhY', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the public 'contao.assets.assets_context' shared service.
     *
     * @return \Contao\CoreBundle\Asset\ContaoContext
     */
    protected function getContao_Assets_AssetsContextService()
    {
        return $this->services['contao.assets.assets_context'] = new \Contao\CoreBundle\Asset\ContaoContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), 'staticPlugins', false);
    }

    /*
     * Gets the public 'contao.framework' shared service.
     *
     * @return \Contao\CoreBundle\Framework\ContaoFramework
     */
    protected function getContao_FrameworkService()
    {
        $this->services['contao.framework'] = $instance = new \Contao\CoreBundle\Framework\ContaoFramework(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()), ($this->services['contao.security.token_checker'] ?? $this->getContao_Security_TokenCheckerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4), 8183, true);

        $instance->setContainer($this);
        $instance->setHookListeners(['addCustomRegexp' => [0 => [0 => [0 => 'Contao\\CoreBundle\\EventListener\\Widget\\CustomRgxpListener', 1 => '__invoke'], 1 => [0 => 'Contao\\CoreBundle\\EventListener\\Widget\\HttpUrlListener', 1 => '__invoke']]], 'loadDataContainer' => [0 => [0 => [0 => 'contao.listener.data_container_callback', 1 => 'onLoadDataContainer']]], 'replaceInsertTags' => [0 => [0 => [0 => 'contao.listener.insert_tags.asset', 1 => 'onReplaceInsertTags'], 1 => [0 => 'Contao\\CoreBundle\\EventListener\\InsertTags\\DateListener', 1 => '__invoke'], 2 => [0 => 'contao.listener.insert_tags.translation', 1 => 'onReplaceInsertTags']]], 'initializeSystem' => [255 => [0 => [0 => 'contao.listener.Z6uZ2NA', 1 => 'onInitializeSystem'], 1 => [0 => 'contao.listener.uCzBg4o', 1 => 'onInitializeSystem']]]]);

        return $instance;
    }

    /*
     * Gets the public 'contao.resource_finder' shared service.
     *
     * @return \Contao\CoreBundle\Config\ResourceFinder
     */
    protected function getContao_ResourceFinderService()
    {
        return $this->services['contao.resource_finder'] = new \Contao\CoreBundle\Config\ResourceFinder($this->parameters['contao.resources_paths']);
    }

    /*
     * Gets the public 'contao.routing.nested_404_matcher' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher
     */
    protected function getContao_Routing_Nested404MatcherService()
    {
        $this->services['contao.routing.nested_404_matcher'] = $instance = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher(($this->privates['contao.routing.route_404_provider'] ?? $this->getContao_Routing_Route404ProviderService()), ($this->privates['contao.routing.final_matcher'] ?? ($this->privates['contao.routing.final_matcher'] = new \Contao\CoreBundle\Routing\Matcher\UrlMatcher())));

        $instance->addRouteFilter(($this->privates['contao.routing.domain_filter'] ?? ($this->privates['contao.routing.domain_filter'] = new \Contao\CoreBundle\Routing\Matcher\DomainFilter())));
        $instance->addRouteFilter(($this->privates['contao.routing.published_filter'] ?? $this->getContao_Routing_PublishedFilterService()));

        return $instance;
    }

    /*
     * Gets the public 'contao.routing.nested_matcher' shared service.
     *
     * @return \Contao\CoreBundle\Routing\Matcher\LegacyMatcher
     */
    protected function getContao_Routing_NestedMatcherService()
    {
        $a = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher(($this->privates['contao.routing.route_provider'] ?? $this->getContao_Routing_RouteProviderService()), ($this->privates['contao.routing.final_matcher'] ?? ($this->privates['contao.routing.final_matcher'] = new \Contao\CoreBundle\Routing\Matcher\UrlMatcher())));
        $a->addRouteFilter(($this->privates['contao.routing.domain_filter'] ?? ($this->privates['contao.routing.domain_filter'] = new \Contao\CoreBundle\Routing\Matcher\DomainFilter())));
        $a->addRouteFilter(($this->privates['contao.routing.published_filter'] ?? $this->getContao_Routing_PublishedFilterService()));
        $a->addRouteFilter(new \Contao\CoreBundle\Routing\Matcher\LanguageFilter());

        return $this->services['contao.routing.nested_matcher'] = new \Contao\CoreBundle\Routing\Matcher\LegacyMatcher(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), $a, '.html', false);
    }

    /*
     * Gets the public 'contao.routing.scope_matcher' shared service.
     *
     * @return \Contao\CoreBundle\Routing\ScopeMatcher
     */
    protected function getContao_Routing_ScopeMatcherService()
    {
        return $this->services['contao.routing.scope_matcher'] = new \Contao\CoreBundle\Routing\ScopeMatcher(($this->privates['contao.routing.backend_matcher'] ?? $this->getContao_Routing_BackendMatcherService()), ($this->privates['contao.routing.frontend_matcher'] ?? $this->getContao_Routing_FrontendMatcherService()));
    }

    /*
     * Gets the public 'contao.security.token_checker' shared service.
     *
     * @return \Contao\CoreBundle\Security\Authentication\Token\TokenChecker
     */
    protected function getContao_Security_TokenCheckerService()
    {
        return $this->services['contao.security.token_checker'] = new \Contao\CoreBundle\Security\Authentication\Token\TokenChecker(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['session'] ?? $this->getSessionService()), ($this->services['security.authentication.trust_resolver'] ?? $this->getSecurity_Authentication_TrustResolverService()), ($this->privates['security.access.simple_role_voter'] ?? ($this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter())));
    }

    /*
     * Gets the public 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contao.listener.doctrine_schema' => ['privates', 'contao.listener.doctrine_schema', 'getContao_Listener_DoctrineSchemaService.php', true],
            'contao_manager.listener.doctrine_alter_table_listener' => ['privates', 'contao_manager.listener.doctrine_alter_table_listener', 'getContaoManager_Listener_DoctrineAlterTableListenerService.php', true],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php', true],
        ], [
            'contao.listener.doctrine_schema' => '?',
            'contao_manager.listener.doctrine_alter_table_listener' => '?',
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');
        $a->addEventListener([0 => 'postGenerateSchema'], 'contao.listener.doctrine_schema');
        $a->addEventListener([0 => 'onSchemaAlterTableRenameColumn'], 'contao_manager.listener.doctrine_alter_table_listener');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory($this->parameters['doctrine.dbal.connection_factory.types']))->createConnection(['driver' => 'pdo_mysql', 'url' => $this->getEnv('DATABASE_URL'), 'charset' => 'utf8mb4', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [1013 => false], 'defaultTableOptions' => ['charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB', 'row_format' => 'DYNAMIC']], new \Doctrine\DBAL\Configuration(), $a, []);
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelRequest'], 250);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_cors.cacheable_response_vary_listener'] ?? ($this->privates['nelmio_cors.cacheable_response_vary_listener'] = new \Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener()));
        }, 1 => 'onResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_security.content_type_listener'] ?? ($this->privates['nelmio_security.content_type_listener'] = new \Nelmio\SecurityBundle\EventListener\ContentTypeListener(true)));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_security.referrer_policy_listener'] ?? $this->getNelmioSecurity_ReferrerPolicyListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['lexik_maintenance.listener'] ?? $this->getLexikMaintenance_ListenerService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['lexik_maintenance.listener'] ?? $this->getLexikMaintenance_ListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['Contao\\CoreBundle\\EventListener\\BackendRebuildCacheMessageListener'] ?? $this->getBackendRebuildCacheMessageListenerService());
        }, 1 => '__invoke'], 0);
        $instance->addListener('Contao\\CoreBundle\\Event\\FilterPageTypeEvent', [0 => function () {
            return ($this->privates['Contao\\CoreBundle\\EventListener\\FilterPageTypeListener'] ?? $this->load('getFilterPageTypeListenerService.php'));
        }, 1 => '__invoke'], 0);
        $instance->addListener('contao.preview_url_create', [0 => function () {
            return ($this->privates['Contao\\CoreBundle\\EventListener\\PreviewUrlCreateListener'] ?? $this->load('getPreviewUrlCreateListenerService.php'));
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.backend_locale'] ?? $this->getContao_Listener_BackendLocaleService());
        }, 1 => '__invoke'], 7);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['Contao\\CoreBundle\\EventListener\\BackendPreviewRedirectListener'] ?? $this->getBackendPreviewRedirectListenerService());
        }, 1 => '__invoke'], 0);
        $instance->addListener('contao.backend_menu_build', [0 => function () {
            return ($this->privates['contao.listener.menu.backend_menu'] ?? $this->load('getContao_Listener_Menu_BackendMenuService.php'));
        }, 1 => '__invoke'], 10);
        $instance->addListener('contao.backend_menu_build', [0 => function () {
            return ($this->privates['contao.listener.menu.backend_logout'] ?? $this->load('getContao_Listener_Menu_BackendLogoutService.php'));
        }, 1 => '__invoke'], 0);
        $instance->addListener('contao.backend_menu_build', [0 => function () {
            return ($this->privates['contao.listener.menu.backend_preview'] ?? $this->load('getContao_Listener_Menu_BackendPreviewService.php'));
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.bypass_maintenance'] ?? $this->getContao_Listener_BypassMaintenanceService());
        }, 1 => '__invoke'], 6);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.clear_session_data'] ?? ($this->privates['contao.listener.clear_session_data'] = new \Contao\CoreBundle\EventListener\ClearSessionDataListener()));
        }, 1 => '__invoke'], -768);
        $instance->addListener('Contao\\CoreBundle\\Event\\JsonLdEvent', [0 => function () {
            return ($this->privates['Contao\\CoreBundle\\EventListener\\ContaoJsonLdSchemaListener'] ?? ($this->privates['Contao\\CoreBundle\\EventListener\\ContaoJsonLdSchemaListener'] = new \Contao\CoreBundle\EventListener\ContaoJsonLdSchemaListener()));
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['contao.listener.command_scheduler'] ?? $this->load('getContao_Listener_CommandSchedulerService.php'));
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.interest_cohort'] ?? $this->getContao_Listener_InterestCohortService());
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['contao.listener.exception_converter'] ?? ($this->privates['contao.listener.exception_converter'] = new \Contao\CoreBundle\EventListener\ExceptionConverterListener()));
        }, 1 => '__invoke'], 96);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.initialize_controller'] ?? ($this->privates['contao.listener.initialize_controller'] = new \Contao\CoreBundle\EventListener\InitializeControllerListener()));
        }, 1 => '__invoke'], 1000);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.insecure_installation'] ?? ($this->privates['contao.listener.insecure_installation'] = new \Contao\CoreBundle\EventListener\InsecureInstallationListener()));
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.make_response_private'] ?? $this->getContao_Listener_MakeResponsePrivateService());
        }, 1 => '__invoke'], -896);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.merge_http_headers'] ?? $this->getContao_Listener_MergeHttpHeadersService());
        }, 1 => '__invoke'], 256);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['contao.listener.pretty_error_screens'] ?? $this->load('getContao_Listener_PrettyErrorScreensService.php'));
        }, 1 => '__invoke'], -96);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.preview_bar'] ?? $this->getContao_Listener_PreviewBarService());
        }, 1 => '__invoke'], 0);
        $instance->addListener('contao.preview_url_convert', [0 => function () {
            return ($this->privates['contao.listener.preview_url_convert'] ?? $this->load('getContao_Listener_PreviewUrlConvertService.php'));
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.preview_authentication'] ?? $this->getContao_Listener_PreviewAuthenticationService());
        }, 1 => '__invoke'], 7);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.referer_id'] ?? $this->getContao_Listener_RefererIdService());
        }, 1 => '__invoke'], 20);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.request_token'] ?? $this->getContao_Listener_RequestTokenService());
        }, 1 => '__invoke'], 14);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['contao.listener.response_exception'] ?? ($this->privates['contao.listener.response_exception'] = new \Contao\CoreBundle\EventListener\ResponseExceptionListener()));
        }, 1 => '__invoke'], 64);
        $instance->addListener('contao.robots_txt', [0 => function () {
            return ($this->privates['contao.listener.robots_txt'] ?? $this->load('getContao_Listener_RobotsTxtService.php'));
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['contao.listener.search_index'] ?? $this->load('getContao_Listener_SearchIndexService.php'));
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.store_referer'] ?? $this->getContao_Listener_StoreRefererService());
        }, 1 => '__invoke'], 0);
        $instance->addListener('security.switch_user', [0 => function () {
            return ($this->privates['contao.listener.switch_user'] ?? $this->load('getContao_Listener_SwitchUserService.php'));
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.two_factor.frontend'] ?? $this->getContao_Listener_TwoFactor_FrontendService());
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.user_session'] ?? $this->getContao_Listener_UserSessionService());
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['Contao\\CoreBundle\\Twig\\Loader\\ContaoFilesystemLoaderWarmer'] ?? $this->getContaoFilesystemLoaderWarmerService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('contao.backend_menu_build', [0 => function () {
            return ($this->privates['contao_manager.listener.backend_menu_listener'] ?? $this->load('getContaoManager_Listener_BackendMenuListenerService.php'));
        }, 1 => '__invoke'], 0);
        $instance->addListener('contao_installation.initialize_application', [0 => function () {
            return ($this->privates['contao_manager.listener.initialize_application'] ?? ($this->privates['contao_manager.listener.initialize_application'] = new \Contao\ManagerBundle\EventListener\InitializeApplicationListener(\dirname(__DIR__, 4))));
        }, 1 => '__invoke'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['contao_manager.listener.install_command'] ?? ($this->privates['contao_manager.listener.install_command'] = new \Contao\ManagerBundle\EventListener\InstallCommandListener(\dirname(__DIR__, 4))));
        }, 1 => '__invoke'], 0);
        $instance->addListener('contao_installation.initialize_application', [0 => function () {
            return ($this->privates['contao.listener.initialize_application'] ?? $this->load('getContao_Listener_InitializeApplicationService.php'));
        }, 1 => '__invoke'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.envelope_listener'] ?? ($this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL)));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['esi_listener'] ?? $this->getEsiListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fragment.listener'] ?? $this->getFragment_ListenerService());
        }, 1 => 'onKernelRequest'], 48);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('fos_http_cache.error.proxy_unreachable', [0 => function () {
            return ($this->privates['fos_http_cache.event_listener.log'] ?? $this->load('getFosHttpCache_EventListener_LogService.php'));
        }, 1 => 'onProxyUnreachableError'], 0);
        $instance->addListener('fos_http_cache.error.response', [0 => function () {
            return ($this->privates['fos_http_cache.event_listener.log'] ?? $this->load('getFosHttpCache_EventListener_LogService.php'));
        }, 1 => 'onProxyResponseError'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['fos_http_cache.event_listener.tag'] ?? $this->getFosHttpCache_EventListener_TagService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['fos_http_cache.event_listener.invalidation'] ?? $this->load('getFosHttpCache_EventListener_InvalidationService.php'));
        }, 1 => 'onKernelTerminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['fos_http_cache.event_listener.invalidation'] ?? $this->load('getFosHttpCache_EventListener_InvalidationService.php'));
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['fos_http_cache.event_listener.invalidation'] ?? $this->load('getFosHttpCache_EventListener_InvalidationService.php'));
        }, 1 => 'onConsoleTerminate'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_security.clickjacking_listener'] ?? $this->getNelmioSecurity_ClickjackingListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['nelmio_security.csp_listener'] ?? $this->getNelmioSecurity_CspListenerService());
        }, 1 => 'onKernelRequest'], 512);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_security.csp_listener'] ?? $this->getNelmioSecurity_CspListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_security.xss_protection_listener'] ?? $this->getNelmioSecurity_XssProtectionListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('security.authentication.success', [0 => function () {
            return ($this->privates['scheb_two_factor.security.authentication_success_event_suppressor'] ?? ($this->privates['scheb_two_factor.security.authentication_success_event_suppressor'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Event\AuthenticationSuccessEventSuppressor()));
        }, 1 => 'onLogin'], 9223372036854775806);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [0 => function () {
            return ($this->privates['scheb_two_factor.security.listener.check_two_factor_code'] ?? $this->load('getSchebTwoFactor_Security_Listener_CheckTwoFactorCodeService.php'));
        }, 1 => 'checkPassport'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LoginSuccessEvent', [0 => function () {
            return ($this->privates['scheb_two_factor.security.listener.suppress_remember_me'] ?? ($this->privates['scheb_two_factor.security.listener.suppress_remember_me'] = new \Scheb\TwoFactorBundle\Security\Http\EventListener\SuppressRememberMeListener()));
        }, 1 => 'onSuccessfulLogin'], -63);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['scheb_two_factor.trusted_cookie_response_listener'] ?? $this->getSchebTwoFactor_TrustedCookieResponseListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LoginSuccessEvent', [0 => function () {
            return ($this->privates['scheb_two_factor.security.listener.trusted_device'] ?? $this->load('getSchebTwoFactor_Security_Listener_TrustedDeviceService.php'));
        }, 1 => 'onSuccessfulLogin'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [0 => function () {
            return ($this->privates['scheb_two_factor.security.listener.check_backup_code'] ?? $this->load('getSchebTwoFactor_Security_Listener_CheckBackupCodeService.php'));
        }, 1 => 'checkPassport'], 16);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['twig.mailer.message_listener'] ?? $this->load('getTwig_Mailer_MessageListenerService.php'));
        }, 1 => 'onMessage'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('security.authentication.success', [0 => function () {
            return ($this->privates['security.authentication.provider_preparation_listener.two_factor.contao_backend'] ?? $this->getSecurity_Authentication_ProviderPreparationListener_TwoFactor_ContaoBackendService());
        }, 1 => 'onLogin'], 9223372036854775807);
        $instance->addListener('scheb_two_factor.authentication.require', [0 => function () {
            return ($this->privates['security.authentication.provider_preparation_listener.two_factor.contao_backend'] ?? $this->getSecurity_Authentication_ProviderPreparationListener_TwoFactor_ContaoBackendService());
        }, 1 => 'onAccessDenied'], 0);
        $instance->addListener('scheb_two_factor.authentication.form', [0 => function () {
            return ($this->privates['security.authentication.provider_preparation_listener.two_factor.contao_backend'] ?? $this->getSecurity_Authentication_ProviderPreparationListener_TwoFactor_ContaoBackendService());
        }, 1 => 'onTwoFactorForm'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.authentication.provider_preparation_listener.two_factor.contao_backend'] ?? $this->getSecurity_Authentication_ProviderPreparationListener_TwoFactor_ContaoBackendService());
        }, 1 => 'onKernelResponse'], 1);
        $instance->addListener('security.authentication.success', [0 => function () {
            return ($this->privates['security.authentication.provider_preparation_listener.two_factor.contao_frontend'] ?? $this->getSecurity_Authentication_ProviderPreparationListener_TwoFactor_ContaoFrontendService());
        }, 1 => 'onLogin'], 9223372036854775807);
        $instance->addListener('scheb_two_factor.authentication.require', [0 => function () {
            return ($this->privates['security.authentication.provider_preparation_listener.two_factor.contao_frontend'] ?? $this->getSecurity_Authentication_ProviderPreparationListener_TwoFactor_ContaoFrontendService());
        }, 1 => 'onAccessDenied'], 0);
        $instance->addListener('scheb_two_factor.authentication.form', [0 => function () {
            return ($this->privates['security.authentication.provider_preparation_listener.two_factor.contao_frontend'] ?? $this->getSecurity_Authentication_ProviderPreparationListener_TwoFactor_ContaoFrontendService());
        }, 1 => 'onTwoFactorForm'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.authentication.provider_preparation_listener.two_factor.contao_frontend'] ?? $this->getSecurity_Authentication_ProviderPreparationListener_TwoFactor_ContaoFrontendService());
        }, 1 => 'onKernelResponse'], 1);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.csrf_token_cookie'] ?? $this->getContao_Listener_CsrfTokenCookieService());
        }, 1 => 'onKernelRequest'], 36);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.csrf_token_cookie'] ?? $this->getContao_Listener_CsrfTokenCookieService());
        }, 1 => 'onKernelResponse'], -832);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.locale'] ?? $this->getContao_Listener_LocaleService());
        }, 1 => 'onKernelRequest'], 20);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.locale'] ?? $this->getContao_Listener_LocaleService());
        }, 1 => 'setTranslatorLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['contao.listener.subrequest_cache'] ?? ($this->privates['contao.listener.subrequest_cache'] = new \Contao\CoreBundle\EventListener\SubrequestCacheSubscriber()));
        }, 1 => 'onKernelRequest'], 255);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['contao.listener.subrequest_cache'] ?? ($this->privates['contao.listener.subrequest_cache'] = new \Contao\CoreBundle\EventListener\SubrequestCacheSubscriber()));
        }, 1 => 'onKernelResponse'], -255);

        return $instance;
    }

    /*
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the public 'fos_http_cache.cache_manager' shared service.
     *
     * @return \FOS\HttpCacheBundle\CacheManager
     */
    protected function getFosHttpCache_CacheManagerService()
    {
        $this->services['fos_http_cache.cache_manager'] = $instance = new \FOS\HttpCacheBundle\CacheManager(($this->services['fos_http_cache.proxy_client.symfony'] ?? $this->getFosHttpCache_ProxyClient_SymfonyService()), ($this->services['router'] ?? $this->getRouterService()));

        if ($this->has('event_dispatcher')) {
            $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
        }
        $instance->setGenerateUrlType(0);

        return $instance;
    }

    /*
     * Gets the public 'fos_http_cache.http.symfony_response_tagger' shared service.
     *
     * @return \FOS\HttpCacheBundle\Http\SymfonyResponseTagger
     */
    protected function getFosHttpCache_Http_SymfonyResponseTaggerService()
    {
        return $this->services['fos_http_cache.http.symfony_response_tagger'] = new \FOS\HttpCacheBundle\Http\SymfonyResponseTagger(['header_formatter' => new \FOS\HttpCache\TagHeaderFormatter\MaxHeaderValueLengthFormatter(new \FOS\HttpCache\TagHeaderFormatter\CommaSeparatedTagHeaderFormatter('X-Cache-Tags', ','), 4096), 'strict' => false]);
    }

    /*
     * Gets the public 'fos_http_cache.proxy_client.symfony' shared service.
     *
     * @return \FOS\HttpCache\ProxyClient\Symfony
     */
    protected function getFosHttpCache_ProxyClient_SymfonyService()
    {
        return $this->services['fos_http_cache.proxy_client.symfony'] = new \FOS\HttpCache\ProxyClient\Symfony(new \FOS\HttpCache\SymfonyCache\KernelDispatcher(($this->services['kernel'] ?? $this->get('kernel', 1))), $this->parameters['fos_http_cache.proxy_client.symfony.options']);
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Contao\CoreBundle\HttpKernel\ControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false)))), ($this->privates['contao.fragment.registry'] ?? $this->getContao_Fragment_RegistryService())), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ($this->privates['contao.model_argument_resolver'] ?? $this->load('getContao_ModelArgumentResolverService.php'));
            yield 1 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 2 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 3 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 4 => ($this->privates['security.user_value_resolver'] ?? $this->load('getSecurity_UserValueResolverService.php'));
            yield 5 => ($this->privates['argument_resolver.service'] ?? $this->load('getArgumentResolver_ServiceService.php'));
            yield 6 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 7 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 8)));
    }

    /*
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        return $this->services['knp_menu.matcher'] = new \Knp\Menu\Matcher\Matcher(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.voter.router'] ?? $this->load('getKnpMenu_Voter_RouterService.php'));
        }, 1));
    }

    /*
     * Gets the public 'lexik_maintenance.driver.factory' shared service.
     *
     * @return \Lexik\Bundle\MaintenanceBundle\Drivers\DriverFactory
     */
    protected function getLexikMaintenance_Driver_FactoryService()
    {
        return $this->services['lexik_maintenance.driver.factory'] = new \Lexik\Bundle\MaintenanceBundle\Drivers\DriverFactory(new \Lexik\Bundle\MaintenanceBundle\Drivers\DatabaseDriver(($this->services['doctrine'] ?? $this->getDoctrineService())), ($this->services['translator'] ?? $this->getTranslatorService()), $this->parameters['lexik_maintenance.driver']);
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\ChainRouter
     */
    protected function getRouterService()
    {
        $a = ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService());

        $this->services['router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter($a);

        $b = ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService());
        $c = new \Symfony\Bridge\Monolog\Logger('router');
        $c->pushProcessor(($this->privates['contao.monolog.processor'] ?? $this->getContao_Monolog_ProcessorService()));
        $c->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $c->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        $c->pushHandler(($this->privates['contao.monolog.handler'] ?? $this->getContao_Monolog_HandlerService()));

        $d = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService.php', true],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'contao_manager.routing_loader::loadFromPlugins', ['cache_dir' => $this->targetDir.'', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => false, 'resource_type' => 'service'], $b, ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $c, 'en');
        $d->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
        $e = ($this->privates['contao.routing.route_provider'] ?? $this->getContao_Routing_RouteProviderService());

        $f = new \Contao\CoreBundle\Routing\PageUrlGenerator($e, ($this->privates['Contao\\CoreBundle\\Routing\\Page\\PageRegistry'] ?? $this->getPageRegistryService()), $a);
        $g = ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService());

        $h = new \Symfony\Cmf\Component\Routing\DynamicRouter($b, ($this->services['contao.routing.nested_matcher'] ?? $this->getContao_Routing_NestedMatcherService()), $f, '', $g, $e);
        $h->addRouteEnhancer(new \Contao\CoreBundle\Routing\Enhancer\InputEnhancer(($this->services['contao.framework'] ?? $this->getContao_FrameworkService())), 0);

        $instance->setContext($b);
        $instance->add($d, '100');
        $instance->add($h, 20);
        $instance->add(new \Symfony\Cmf\Component\Routing\DynamicRouter($b, ($this->services['contao.routing.nested_404_matcher'] ?? $this->getContao_Routing_Nested404MatcherService()), $f, '', $g, ($this->privates['contao.routing.route_404_provider'] ?? $this->getContao_Routing_Route404ProviderService())), -200);
        $instance->add(new \Symfony\Cmf\Component\Routing\DynamicRouter($b, new \Contao\CoreBundle\Routing\Matcher\UrlMatcher(), new \Symfony\Cmf\Component\Routing\ProviderBasedGenerator(new \Contao\CoreBundle\Routing\LegacyRouteProvider(($this->privates['contao.routing.frontend_loader'] ?? ($this->privates['contao.routing.frontend_loader'] = new \Contao\CoreBundle\Routing\FrontendLoader(false, '.html')))), $a), '', $g), 0);

        return $instance;
    }

    /*
     * Gets the public 'security.authentication.trust_resolver' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Scheb\TwoFactorBundle\Security\Authentication\AuthenticationTrustResolver(new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL));
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false);
    }

    /*
     * Gets the public 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.contao_backend' => ['privates', 'security.firewall.map.context.contao_backend', 'getSecurity_Firewall_Map_Context_ContaoBackendService.php', true],
            'security.firewall.map.context.contao_frontend' => ['privates', 'security.firewall.map.context.contao_frontend', 'getSecurity_Firewall_Map_Context_ContaoFrontendService.php', true],
            'security.firewall.map.context.contao_install' => ['privates', 'security.firewall.map.context.contao_install', 'getSecurity_Firewall_Map_Context_ContaoInstallService.php', true],
        ], [
            'security.firewall.map.context.contao_backend' => '?',
            'security.firewall.map.context.contao_frontend' => '?',
            'security.firewall.map.context.contao_install' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.contao_install' => ($this->privates['.security.request_matcher.2lQKaAK'] ?? ($this->privates['.security.request_matcher.2lQKaAK'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/contao/install$')));
            yield 'security.firewall.map.context.contao_backend' => ($this->privates['contao.routing.backend_matcher'] ?? $this->getContao_Routing_BackendMatcherService());
            yield 'security.firewall.map.context.contao_frontend' => ($this->privates['contao.routing.frontend_matcher'] ?? $this->getContao_Routing_FrontendMatcherService());
        }, 3));
    }

    /*
     * Gets the public 'security.helper' shared service.
     *
     * @return \Symfony\Component\Security\Core\Security
     */
    protected function getSecurity_HelperService()
    {
        return $this->services['security.helper'] = new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ]));
    }

    /*
     * Gets the public 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('contao_backend', 'contao_backend_logout', 'logout', '_csrf_token', NULL, NULL);
        $instance->registerListener('contao_frontend', 'contao_frontend_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        $this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()));

        $a = new \Contao\CoreBundle\Session\Attribute\ArrayAttributeBag('_contao_be_attributes');
        $a->setName('contao_backend');
        $b = new \Contao\CoreBundle\Session\Attribute\ArrayAttributeBag('_contao_fe_attributes');
        $b->setName('contao_frontend');

        $instance->registerBag($a);
        $instance->registerBag($b);

        return $instance;
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Contao\CoreBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Contao\CoreBundle\Translation\Translator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['contao.resource_finder'] ?? $this->getContao_ResourceFinderService()));
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Twig\Loader\ChainLoader();

        $b = new \Contao\CoreBundle\Twig\Loader\FailTolerantFilesystemLoader([], \dirname(__DIR__, 4));
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu/Resources/views'));
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/Resources/views'), 'Doctrine');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/Resources/views'), '!Doctrine');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/Resources/views'), 'Framework');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/Resources/views'), '!Framework');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/views'), 'SchebTwoFactor');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/views'), '!SchebTwoFactor');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), 'KnpMenu');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), '!KnpMenu');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/Resources/views'), 'Twig');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/Resources/views'), '!Twig');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/Resources/views'), 'Security');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/Resources/views'), '!Security');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), 'ContaoCore');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), '!ContaoCore');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), 'ContaoInstallation');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), '!ContaoInstallation');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 'email');
        $b->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), '!email');

        $a->addLoader(($this->privates['Contao\\CoreBundle\\Twig\\Loader\\ContaoFilesystemLoader'] ?? $this->getContaoFilesystemLoaderService()));
        $a->addLoader($b);
        $a->addLoader(new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4)));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['debug' => false, 'strict_variables' => false, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $c = ($this->services['translator'] ?? $this->getTranslatorService());
        $d = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $e = new \Knp\Menu\Util\MenuManipulator();
        $f = ($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService());
        $g = new \Symfony\Bridge\Twig\AppVariable();
        $g->setEnvironment('prod');
        $g->setDebug(false);
        if ($this->has('security.token_storage')) {
            $g->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $g->setRequestStack($d);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->services['assets.packages'] ?? $this->getAssets_PackagesService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->services['debug.stopwatch'] ?? ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->services['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \FOS\HttpCacheBundle\Twig\CacheTagExtension(($this->services['fos_http_cache.http.symfony_response_tagger'] ?? $this->getFosHttpCache_Http_SymfonyResponseTaggerService())));
        $instance->addExtension(new \Nelmio\SecurityBundle\Twig\NelmioCSPTwigExtension(($this->privates['nelmio_security.csp_listener'] ?? $this->getNelmioSecurity_CspListenerService()), ($this->privates['nelmio_security.sha_computer'] ?? ($this->privates['nelmio_security.sha_computer'] = new \Nelmio\SecurityBundle\ContentSecurityPolicy\ShaComputer('sha256')))));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'list' => ['privates', 'knp_menu.renderer.list', 'getKnpMenu_Renderer_ListService.php', true],
            'twig' => ['privates', 'knp_menu.renderer.twig', 'getKnpMenu_Renderer_TwigService.php', true],
        ], [
            'list' => '?',
            'twig' => '?',
        ]), 'twig', [], false), new \Knp\Menu\Provider\ChainProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.menu_provider.lazy'] ?? $this->load('getKnpMenu_MenuProvider_LazyService.php'));
            yield 1 => ($this->privates['knp_menu.menu_provider.builder_alias'] ?? $this->load('getKnpMenu_MenuProvider_BuilderAliasService.php'));
        }, 2)), $e, $f), $f, $e));
        $instance->addExtension(new \Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension(new \Knp\Bundle\TimeBundle\DateTimeFormatter($c)));
        $instance->addExtension(($this->services['Contao\\CoreBundle\\Twig\\Extension\\ContaoExtension'] ?? $this->getContaoExtensionService()));
        $instance->addExtension(new \SensioLabs\AnsiConverter\Bridge\Twig\AnsiExtension());
        $instance->addGlobal('app', $g);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Contao\\CoreBundle\\Twig\\Runtime\\FigureRendererRuntime' => ['privates', 'Contao\\CoreBundle\\Twig\\Runtime\\FigureRendererRuntime', 'getFigureRendererRuntimeService.php', true],
            'Contao\\CoreBundle\\Twig\\Runtime\\InsertTagRuntime' => ['privates', 'Contao\\CoreBundle\\Twig\\Runtime\\InsertTagRuntime', 'getInsertTagRuntimeService.php', true],
            'Contao\\CoreBundle\\Twig\\Runtime\\LegacyTemplateFunctionsRuntime' => ['privates', 'Contao\\CoreBundle\\Twig\\Runtime\\LegacyTemplateFunctionsRuntime', 'getLegacyTemplateFunctionsRuntimeService.php', true],
            'Contao\\CoreBundle\\Twig\\Runtime\\PictureConfigurationRuntime' => ['privates', 'Contao\\CoreBundle\\Twig\\Runtime\\PictureConfigurationRuntime', 'getPictureConfigurationRuntimeService.php', true],
            'Contao\\CoreBundle\\Twig\\Runtime\\SchemaOrgRuntime' => ['privates', 'Contao\\CoreBundle\\Twig\\Runtime\\SchemaOrgRuntime', 'getSchemaOrgRuntimeService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
        ], [
            'Contao\\CoreBundle\\Twig\\Runtime\\FigureRendererRuntime' => '?',
            'Contao\\CoreBundle\\Twig\\Runtime\\InsertTagRuntime' => '?',
            'Contao\\CoreBundle\\Twig\\Runtime\\LegacyTemplateFunctionsRuntime' => '?',
            'Contao\\CoreBundle\\Twig\\Runtime\\PictureConfigurationRuntime' => '?',
            'Contao\\CoreBundle\\Twig\\Runtime\\SchemaOrgRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
        ])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($this->getEnv('APP_SECRET'));
    }

    /*
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /*
     * Gets the private 'Contao\CoreBundle\EventListener\BackendPreviewRedirectListener' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\BackendPreviewRedirectListener
     */
    protected function getBackendPreviewRedirectListenerService()
    {
        return $this->privates['Contao\\CoreBundle\\EventListener\\BackendPreviewRedirectListener'] = new \Contao\CoreBundle\EventListener\BackendPreviewRedirectListener(($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()));
    }

    /*
     * Gets the private 'Contao\CoreBundle\EventListener\BackendRebuildCacheMessageListener' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\BackendRebuildCacheMessageListener
     */
    protected function getBackendRebuildCacheMessageListenerService()
    {
        return $this->privates['Contao\\CoreBundle\\EventListener\\BackendRebuildCacheMessageListener'] = new \Contao\CoreBundle\EventListener\BackendRebuildCacheMessageListener(($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()), ($this->services['cache.system'] ?? $this->getCache_SystemService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'Contao\CoreBundle\Routing\Page\PageRegistry' shared service.
     *
     * @return \Contao\CoreBundle\Routing\Page\PageRegistry
     */
    protected function getPageRegistryService()
    {
        $this->privates['Contao\\CoreBundle\\Routing\\Page\\PageRegistry'] = $instance = new \Contao\CoreBundle\Routing\Page\PageRegistry(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()));

        $instance->add('root', new \Contao\CoreBundle\Routing\Page\RouteConfig(NULL, NULL, NULL, [], [], ['_controller' => 'Contao\\CoreBundle\\Controller\\Page\\RootPageController'], []), NULL, false);

        return $instance;
    }

    /*
     * Gets the private 'Contao\CoreBundle\Twig\Loader\ContaoFilesystemLoader' shared service.
     *
     * @return \Contao\CoreBundle\Twig\Loader\ContaoFilesystemLoader
     */
    protected function getContaoFilesystemLoaderService()
    {
        return $this->privates['Contao\\CoreBundle\\Twig\\Loader\\ContaoFilesystemLoader'] = new \Contao\CoreBundle\Twig\Loader\ContaoFilesystemLoader(($this->services['cache.system'] ?? $this->getCache_SystemService()), ($this->privates['Contao\\CoreBundle\\Twig\\Loader\\TemplateLocator'] ?? $this->getTemplateLocatorService()), ($this->privates['Contao\\CoreBundle\\Twig\\Loader\\ThemeNamespace'] ?? ($this->privates['Contao\\CoreBundle\\Twig\\Loader\\ThemeNamespace'] = new \Contao\CoreBundle\Twig\Loader\ThemeNamespace())), \dirname(__DIR__, 4));
    }

    /*
     * Gets the private 'Contao\CoreBundle\Twig\Loader\ContaoFilesystemLoaderWarmer' shared service.
     *
     * @return \Contao\CoreBundle\Twig\Loader\ContaoFilesystemLoaderWarmer
     */
    protected function getContaoFilesystemLoaderWarmerService()
    {
        return $this->privates['Contao\\CoreBundle\\Twig\\Loader\\ContaoFilesystemLoaderWarmer'] = new \Contao\CoreBundle\Twig\Loader\ContaoFilesystemLoaderWarmer(($this->privates['Contao\\CoreBundle\\Twig\\Loader\\ContaoFilesystemLoader'] ?? $this->getContaoFilesystemLoaderService()), ($this->privates['Contao\\CoreBundle\\Twig\\Loader\\TemplateLocator'] ?? $this->getTemplateLocatorService()), \dirname(__DIR__, 4), 'prod');
    }

    /*
     * Gets the private 'Contao\CoreBundle\Twig\Loader\TemplateLocator' shared service.
     *
     * @return \Contao\CoreBundle\Twig\Loader\TemplateLocator
     */
    protected function getTemplateLocatorService()
    {
        return $this->privates['Contao\\CoreBundle\\Twig\\Loader\\TemplateLocator'] = new \Contao\CoreBundle\Twig\Loader\TemplateLocator(\dirname(__DIR__, 4), $this->parameters['kernel.bundles'], $this->parameters['kernel.bundles_metadata'], ($this->privates['Contao\\CoreBundle\\Twig\\Loader\\ThemeNamespace'] ?? ($this->privates['Contao\\CoreBundle\\Twig\\Loader\\ThemeNamespace'] = new \Contao\CoreBundle\Twig\Loader\ThemeNamespace())), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()));
    }

    /*
     * Gets the private 'annotations.cache_adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter
     */
    protected function getAnnotations_CacheAdapterService()
    {
        return \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
    }

    /*
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('krZKNm0bKJ', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'contao.fragment.registry' shared service.
     *
     * @return \Contao\CoreBundle\Fragment\FragmentRegistry
     */
    protected function getContao_Fragment_RegistryService()
    {
        $this->privates['contao.fragment.registry'] = $instance = new \Contao\CoreBundle\Fragment\FragmentRegistry();

        $instance->add('contao.frontend_module.two_factor', ($this->privates['contao.fragment._config_kwBOC0u'] ?? ($this->privates['contao.fragment._config_kwBOC0u'] = new \Contao\CoreBundle\Fragment\FragmentConfig('contao.fragment._contao.frontend_module.two_factor', 'forward', ['ignore_errors' => false]))));
        $instance->add('contao.content_element.markdown', ($this->privates['contao.fragment._config_K115o4Z'] ?? ($this->privates['contao.fragment._config_K115o4Z'] = new \Contao\CoreBundle\Fragment\FragmentConfig('contao.fragment._contao.content_element.markdown', 'forward', ['ignore_errors' => false]))));

        return $instance;
    }

    /*
     * Gets the private 'contao.listener.backend_locale' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\BackendLocaleListener
     */
    protected function getContao_Listener_BackendLocaleService()
    {
        return $this->privates['contao.listener.backend_locale'] = new \Contao\CoreBundle\EventListener\BackendLocaleListener(($this->services['security.helper'] ?? $this->getSecurity_HelperService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'contao.listener.bypass_maintenance' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\BypassMaintenanceListener
     */
    protected function getContao_Listener_BypassMaintenanceService()
    {
        return $this->privates['contao.listener.bypass_maintenance'] = new \Contao\CoreBundle\EventListener\BypassMaintenanceListener(($this->services['contao.security.token_checker'] ?? $this->getContao_Security_TokenCheckerService()));
    }

    /*
     * Gets the private 'contao.listener.csrf_token_cookie' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\CsrfTokenCookieSubscriber
     */
    protected function getContao_Listener_CsrfTokenCookieService()
    {
        return $this->privates['contao.listener.csrf_token_cookie'] = new \Contao\CoreBundle\EventListener\CsrfTokenCookieSubscriber(($this->services['Contao\\CoreBundle\\Csrf\\ContaoCsrfTokenManager'] ?? $this->getContaoCsrfTokenManagerService()), ($this->privates['contao.csrf.token_storage'] ?? ($this->privates['contao.csrf.token_storage'] = new \Contao\CoreBundle\Csrf\MemoryTokenStorage())), 'csrf_');
    }

    /*
     * Gets the private 'contao.listener.interest_cohort' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\InterestCohortListener
     */
    protected function getContao_Listener_InterestCohortService()
    {
        return $this->privates['contao.listener.interest_cohort'] = new \Contao\CoreBundle\EventListener\InterestCohortListener(($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()));
    }

    /*
     * Gets the private 'contao.listener.locale' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\LocaleSubscriber
     */
    protected function getContao_Listener_LocaleService()
    {
        return $this->privates['contao.listener.locale'] = new \Contao\CoreBundle\EventListener\LocaleSubscriber(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()), ($this->services['Contao\\CoreBundle\\Intl\\Locales'] ?? $this->getLocalesService()));
    }

    /*
     * Gets the private 'contao.listener.make_response_private' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\MakeResponsePrivateListener
     */
    protected function getContao_Listener_MakeResponsePrivateService()
    {
        return $this->privates['contao.listener.make_response_private'] = new \Contao\CoreBundle\EventListener\MakeResponsePrivateListener(($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()));
    }

    /*
     * Gets the private 'contao.listener.merge_http_headers' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\MergeHttpHeadersListener
     */
    protected function getContao_Listener_MergeHttpHeadersService()
    {
        return $this->privates['contao.listener.merge_http_headers'] = new \Contao\CoreBundle\EventListener\MergeHttpHeadersListener(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()));
    }

    /*
     * Gets the private 'contao.listener.preview_authentication' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\PreviewAuthenticationListener
     */
    protected function getContao_Listener_PreviewAuthenticationService()
    {
        return $this->privates['contao.listener.preview_authentication'] = new \Contao\CoreBundle\EventListener\PreviewAuthenticationListener(($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()), ($this->services['contao.security.token_checker'] ?? $this->getContao_Security_TokenCheckerService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['uri_signer'] ?? ($this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($this->getEnv('APP_SECRET')))));
    }

    /*
     * Gets the private 'contao.listener.preview_bar' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\PreviewToolbarListener
     */
    protected function getContao_Listener_PreviewBarService()
    {
        return $this->privates['contao.listener.preview_bar'] = new \Contao\CoreBundle\EventListener\PreviewToolbarListener(($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), '/preview.php');
    }

    /*
     * Gets the private 'contao.listener.referer_id' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\RefererIdListener
     */
    protected function getContao_Listener_RefererIdService()
    {
        return $this->privates['contao.listener.referer_id'] = new \Contao\CoreBundle\EventListener\RefererIdListener(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(48), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()));
    }

    /*
     * Gets the private 'contao.listener.request_token' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\RequestTokenListener
     */
    protected function getContao_Listener_RequestTokenService()
    {
        return $this->privates['contao.listener.request_token'] = new \Contao\CoreBundle\EventListener\RequestTokenListener(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()), ($this->services['Contao\\CoreBundle\\Csrf\\ContaoCsrfTokenManager'] ?? $this->getContaoCsrfTokenManagerService()), 'contao_csrf_token', 'csrf_');
    }

    /*
     * Gets the private 'contao.listener.store_referer' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\StoreRefererListener
     */
    protected function getContao_Listener_StoreRefererService()
    {
        return $this->privates['contao.listener.store_referer'] = new \Contao\CoreBundle\EventListener\StoreRefererListener(($this->services['security.helper'] ?? $this->getSecurity_HelperService()), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()));
    }

    /*
     * Gets the private 'contao.listener.two_factor.frontend' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\TwoFactorFrontendListener
     */
    protected function getContao_Listener_TwoFactor_FrontendService()
    {
        return $this->privates['contao.listener.two_factor.frontend'] = new \Contao\CoreBundle\EventListener\TwoFactorFrontendListener(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), $this->parameters['scheb_two_factor.security_tokens']);
    }

    /*
     * Gets the private 'contao.listener.user_session' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\UserSessionListener
     */
    protected function getContao_Listener_UserSessionService()
    {
        return $this->privates['contao.listener.user_session'] = new \Contao\CoreBundle\EventListener\UserSessionListener(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['security.helper'] ?? $this->getSecurity_HelperService()), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /*
     * Gets the private 'contao.monolog.handler' shared service.
     *
     * @return \Contao\CoreBundle\Monolog\ContaoTableHandler
     */
    protected function getContao_Monolog_HandlerService()
    {
        $this->privates['contao.monolog.handler'] = $instance = new \Contao\CoreBundle\Monolog\ContaoTableHandler('debug', false);

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the private 'contao.monolog.processor' shared service.
     *
     * @return \Contao\CoreBundle\Monolog\ContaoTableProcessor
     */
    protected function getContao_Monolog_ProcessorService()
    {
        return $this->privates['contao.monolog.processor'] = new \Contao\CoreBundle\Monolog\ContaoTableProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()));
    }

    /*
     * Gets the private 'contao.routing.backend_matcher' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getContao_Routing_BackendMatcherService()
    {
        $this->privates['contao.routing.backend_matcher'] = $instance = new \Symfony\Component\HttpFoundation\RequestMatcher();

        $instance->matchAttribute('_scope', 'backend');

        return $instance;
    }

    /*
     * Gets the private 'contao.routing.frontend_matcher' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getContao_Routing_FrontendMatcherService()
    {
        $this->privates['contao.routing.frontend_matcher'] = $instance = new \Symfony\Component\HttpFoundation\RequestMatcher();

        $instance->matchAttribute('_scope', 'frontend');

        return $instance;
    }

    /*
     * Gets the private 'contao.routing.published_filter' shared service.
     *
     * @return \Contao\CoreBundle\Routing\Matcher\PublishedFilter
     */
    protected function getContao_Routing_PublishedFilterService()
    {
        return $this->privates['contao.routing.published_filter'] = new \Contao\CoreBundle\Routing\Matcher\PublishedFilter(($this->services['contao.security.token_checker'] ?? $this->getContao_Security_TokenCheckerService()));
    }

    /*
     * Gets the private 'contao.routing.route_404_provider' shared service.
     *
     * @return \Contao\CoreBundle\Routing\Route404Provider
     */
    protected function getContao_Routing_Route404ProviderService()
    {
        $a = ($this->privates['Contao\\CoreBundle\\Routing\\Page\\PageRegistry'] ?? $this->getPageRegistryService());

        return $this->privates['contao.routing.route_404_provider'] = new \Contao\CoreBundle\Routing\Route404Provider(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), new \Contao\CoreBundle\Routing\Candidates\LocaleCandidates($a), $a);
    }

    /*
     * Gets the private 'contao.routing.route_provider' shared service.
     *
     * @return \Contao\CoreBundle\Routing\RouteProvider
     */
    protected function getContao_Routing_RouteProviderService()
    {
        return $this->privates['contao.routing.route_provider'] = new \Contao\CoreBundle\Routing\RouteProvider(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), new \Contao\CoreBundle\Routing\Candidates\LegacyCandidates(false, '.html'), ($this->privates['Contao\\CoreBundle\\Routing\\Page\\PageRegistry'] ?? $this->getPageRegistryService()), true, false);
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, NULL, NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), false);
    }

    /*
     * Gets the private 'esi_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SurrogateListener
     */
    protected function getEsiListenerService()
    {
        return $this->privates['esi_listener'] = new \Symfony\Component\HttpKernel\EventListener\SurrogateListener(($this->privates['esi'] ?? ($this->privates['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi())));
    }

    /*
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), false);
    }

    /*
     * Gets the private 'fos_http_cache.event_listener.tag' shared service.
     *
     * @return \FOS\HttpCacheBundle\EventListener\TagListener
     */
    protected function getFosHttpCache_EventListener_TagService()
    {
        return $this->privates['fos_http_cache.event_listener.tag'] = new \FOS\HttpCacheBundle\EventListener\TagListener(($this->services['fos_http_cache.cache_manager'] ?? $this->getFosHttpCache_CacheManagerService()), ($this->services['fos_http_cache.http.symfony_response_tagger'] ?? $this->getFosHttpCache_Http_SymfonyResponseTaggerService()), new \FOS\HttpCacheBundle\Http\RuleMatcher(new \FOS\HttpCacheBundle\Http\RequestMatcher\CacheableRequestMatcher(), new \FOS\HttpCacheBundle\Http\ResponseMatcher\CacheableResponseMatcher([])), ($this->privates['fos_http_cache.rule_matcher.must_invalidate'] ?? $this->getFosHttpCache_RuleMatcher_MustInvalidateService()), NULL);
    }

    /*
     * Gets the private 'fos_http_cache.rule_matcher.must_invalidate' shared service.
     *
     * @return \FOS\HttpCacheBundle\Http\RuleMatcher
     */
    protected function getFosHttpCache_RuleMatcher_MustInvalidateService()
    {
        return $this->privates['fos_http_cache.rule_matcher.must_invalidate'] = new \FOS\HttpCacheBundle\Http\RuleMatcher(new \FOS\HttpCacheBundle\Http\RequestMatcher\UnsafeRequestMatcher(), new \FOS\HttpCacheBundle\Http\ResponseMatcher\NonErrorResponseMatcher());
    }

    /*
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->privates['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(($this->services['uri_signer'] ?? ($this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($this->getEnv('APP_SECRET')))), '/_fragment');
    }

    /*
     * Gets the private 'lexik_maintenance.listener' shared service.
     *
     * @return \Lexik\Bundle\MaintenanceBundle\Listener\MaintenanceListener
     */
    protected function getLexikMaintenance_ListenerService()
    {
        return $this->privates['lexik_maintenance.listener'] = new \Lexik\Bundle\MaintenanceBundle\Listener\MaintenanceListener(($this->services['lexik_maintenance.driver.factory'] ?? $this->getLexikMaintenance_Driver_FactoryService()), '^/contao($|/)', NULL, NULL, [], [], NULL, $this->parameters['lexik_maintenance.authorized.attributes'], 503, 'Service Temporarily Unavailable', 'Service Temporarily Unavailable', false);
    }

    /*
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->privates['translator.default'] ?? $this->getTranslator_DefaultService());
            yield 1 => ($this->services['translator'] ?? $this->getTranslatorService());
        }, 2), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->privates['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);

        $instance->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $a = new \Monolog\Handler\RotatingFileHandler((\dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'logs/prod.log'), 10, 200, true, NULL, false);
        $a->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));
        $a->setFilenameFormat('{filename}-{date}', 'Y-m-d');

        return $this->privates['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($a, new \Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), [0 => ['code' => 400, 'urls' => []], 1 => ['code' => 401, 'urls' => []], 2 => ['code' => 403, 'urls' => []], 3 => ['code' => 404, 'urls' => []], 4 => ['code' => 503, 'urls' => []]], new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy(400)), 0, true, true, NULL);
    }

    /*
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['contao.monolog.processor'] ?? $this->getContao_Monolog_ProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        $instance->pushHandler(($this->privates['contao.monolog.handler'] ?? $this->getContao_Monolog_HandlerService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['contao.monolog.processor'] ?? $this->getContao_Monolog_ProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        $instance->pushHandler(($this->privates['contao.monolog.handler'] ?? $this->getContao_Monolog_HandlerService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['contao.monolog.processor'] ?? $this->getContao_Monolog_ProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        $instance->pushHandler(($this->privates['contao.monolog.handler'] ?? $this->getContao_Monolog_HandlerService()));

        return $instance;
    }

    /*
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->privates['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(new \Nelmio\CorsBundle\Options\Resolver([0 => new \Nelmio\CorsBundle\Options\ConfigProvider([], $this->parameters['nelmio_cors.defaults']), 1 => new \Contao\CoreBundle\Cors\WebsiteRootsConfigProvider(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()))]));
    }

    /*
     * Gets the private 'nelmio_security.clickjacking_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\ClickjackingListener
     */
    protected function getNelmioSecurity_ClickjackingListenerService()
    {
        return $this->privates['nelmio_security.clickjacking_listener'] = new \Nelmio\SecurityBundle\EventListener\ClickjackingListener($this->parameters['nelmio_security.clickjacking.paths'], []);
    }

    /*
     * Gets the private 'nelmio_security.csp_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\ContentSecurityPolicyListener
     */
    protected function getNelmioSecurity_CspListenerService()
    {
        $a = new \Nelmio\SecurityBundle\ContentSecurityPolicy\PolicyManager();

        return $this->privates['nelmio_security.csp_listener'] = new \Nelmio\SecurityBundle\EventListener\ContentSecurityPolicyListener(\Nelmio\SecurityBundle\ContentSecurityPolicy\DirectiveSet::fromConfig($a, ['enabled' => true, 'hosts' => [], 'content_types' => [], 'report_endpoint' => ['log_channel' => NULL, 'log_formatter' => 'nelmio_security.csp_report.log_formatter', 'log_level' => 'notice', 'filters' => ['domains' => true, 'schemes' => true, 'browser_bugs' => true, 'injected_scripts' => true], 'dismiss' => []], 'compat_headers' => true, 'report_logger_service' => 'logger', 'hash' => ['algorithm' => 'sha256']], 'report'), \Nelmio\SecurityBundle\ContentSecurityPolicy\DirectiveSet::fromConfig($a, ['enabled' => true, 'hosts' => [], 'content_types' => [], 'report_endpoint' => ['log_channel' => NULL, 'log_formatter' => 'nelmio_security.csp_report.log_formatter', 'log_level' => 'notice', 'filters' => ['domains' => true, 'schemes' => true, 'browser_bugs' => true, 'injected_scripts' => true], 'dismiss' => []], 'compat_headers' => true, 'report_logger_service' => 'logger', 'hash' => ['algorithm' => 'sha256']], 'enforce'), new \Nelmio\SecurityBundle\ContentSecurityPolicy\NonceGenerator(16), ($this->privates['nelmio_security.sha_computer'] ?? ($this->privates['nelmio_security.sha_computer'] = new \Nelmio\SecurityBundle\ContentSecurityPolicy\ShaComputer('sha256'))), true, [], []);
    }

    /*
     * Gets the private 'nelmio_security.referrer_policy_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\ReferrerPolicyListener
     */
    protected function getNelmioSecurity_ReferrerPolicyListenerService()
    {
        return $this->privates['nelmio_security.referrer_policy_listener'] = new \Nelmio\SecurityBundle\EventListener\ReferrerPolicyListener($this->parameters['nelmio_security.referrer_policy.policies']);
    }

    /*
     * Gets the private 'nelmio_security.xss_protection_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\XssProtectionListener
     */
    protected function getNelmioSecurity_XssProtectionListenerService()
    {
        return $this->privates['nelmio_security.xss_protection_listener'] = \Nelmio\SecurityBundle\EventListener\XssProtectionListener::fromConfig(['enabled' => true, 'mode_block' => true, 'report_uri' => NULL]);
    }

    /*
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), false);
    }

    /*
     * Gets the private 'scheb_two_factor.provider_preparation_recorder' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TokenPreparationRecorder
     */
    protected function getSchebTwoFactor_ProviderPreparationRecorderService()
    {
        return $this->privates['scheb_two_factor.provider_preparation_recorder'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TokenPreparationRecorder(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /*
     * Gets the private 'scheb_two_factor.provider_registry' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderRegistry
     */
    protected function getSchebTwoFactor_ProviderRegistryService()
    {
        return $this->privates['scheb_two_factor.provider_registry'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderRegistry(new RewindableGenerator(function () {
            yield 'contao' => ($this->privates['contao.security.two_factor.provider'] ?? $this->load('getContao_Security_TwoFactor_ProviderService.php'));
        }, 1));
    }

    /*
     * Gets the private 'scheb_two_factor.trusted_cookie_response_listener' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener
     */
    protected function getSchebTwoFactor_TrustedCookieResponseListenerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['scheb_two_factor.trusted_cookie_response_listener'] = $this->createProxy('TrustedCookieResponseListener_c7f9b85', function () {
                return \TrustedCookieResponseListener_c7f9b85::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSchebTwoFactor_TrustedCookieResponseListenerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-trusted-device'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Trusted'.\DIRECTORY_SEPARATOR.'TrustedCookieResponseListener.php';

        return new \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener(($this->privates['scheb_two_factor.trusted_token_storage'] ?? $this->getSchebTwoFactor_TrustedTokenStorageService()), 5184000, 'trusted_device', NULL, 'lax', '/', NULL);
    }

    /*
     * Gets the private 'scheb_two_factor.trusted_token_storage' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage
     */
    protected function getSchebTwoFactor_TrustedTokenStorageService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['scheb_two_factor.trusted_token_storage'] = $this->createProxy('TrustedDeviceTokenStorage_fc7b3c4', function () {
                return \TrustedDeviceTokenStorage_fc7b3c4::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSchebTwoFactor_TrustedTokenStorageService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-trusted-device'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Trusted'.\DIRECTORY_SEPARATOR.'TrustedDeviceTokenStorage.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-trusted-device'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Trusted'.\DIRECTORY_SEPARATOR.'TrustedDeviceTokenEncoder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-trusted-device'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Trusted'.\DIRECTORY_SEPARATOR.'JwtTokenEncoder.php';

        return new \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenEncoder(new \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\JwtTokenEncoder($this->getEnv('APP_SECRET')), 5184000), 'trusted_device');
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->load('getSecurity_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['scheb_two_factor.security.access.authenticated_voter'] ?? ($this->privates['scheb_two_factor.security.access.authenticated_voter'] = new \Scheb\TwoFactorBundle\Security\Authorization\Voter\TwoFactorInProgressVoter()));
            yield 2 => ($this->privates['security.access.simple_role_voter'] ?? ($this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()));
            yield 3 => ($this->privates['security.access.expression_voter'] ?? $this->load('getSecurity_Access_ExpressionVoterService.php'));
            yield 4 => ($this->privates['contao.security.backend_access_voter'] ?? ($this->privates['contao.security.backend_access_voter'] = new \Contao\CoreBundle\Security\Voter\BackendAccessVoter()));
            yield 5 => ($this->privates['Contao\\CoreBundle\\Security\\Voter\\MemberGroupVoter'] ?? ($this->privates['Contao\\CoreBundle\\Security\\Voter\\MemberGroupVoter'] = new \Contao\CoreBundle\Security\Voter\MemberGroupVoter()));
        }, 6), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['contao.security.authentication_provider.contao_backend.two_factor_decorator'] ?? $this->load('getContao_Security_AuthenticationProvider_ContaoBackend_TwoFactorDecoratorService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.contao_backend.two_factor_decorator'] ?? $this->load('getSecurity_Authentication_Provider_Anonymous_ContaoBackend_TwoFactorDecoratorService.php'));
            yield 2 => ($this->privates['contao.security.authentication_provider.contao_frontend.two_factor_decorator'] ?? $this->load('getContao_Security_AuthenticationProvider_ContaoFrontend_TwoFactorDecoratorService.php'));
            yield 3 => ($this->privates['security.authentication.provider.rememberme.contao_frontend.two_factor_decorator'] ?? $this->load('getSecurity_Authentication_Provider_Rememberme_ContaoFrontend_TwoFactorDecoratorService.php'));
            yield 4 => ($this->privates['security.authentication.provider.anonymous.contao_frontend.two_factor_decorator'] ?? $this->load('getSecurity_Authentication_Provider_Anonymous_ContaoFrontend_TwoFactorDecoratorService.php'));
        }, 5), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.provider_preparation_listener.two_factor.contao_backend' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderPreparationListener
     */
    protected function getSecurity_Authentication_ProviderPreparationListener_TwoFactor_ContaoBackendService()
    {
        return $this->privates['security.authentication.provider_preparation_listener.two_factor.contao_backend'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderPreparationListener(($this->privates['scheb_two_factor.provider_registry'] ?? $this->getSchebTwoFactor_ProviderRegistryService()), ($this->privates['scheb_two_factor.provider_preparation_recorder'] ?? $this->getSchebTwoFactor_ProviderPreparationRecorderService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), 'contao_backend', true, false);
    }

    /*
     * Gets the private 'security.authentication.provider_preparation_listener.two_factor.contao_frontend' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderPreparationListener
     */
    protected function getSecurity_Authentication_ProviderPreparationListener_TwoFactor_ContaoFrontendService()
    {
        return $this->privates['security.authentication.provider_preparation_listener.two_factor.contao_frontend'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderPreparationListener(($this->privates['scheb_two_factor.provider_registry'] ?? $this->getSchebTwoFactor_ProviderRegistryService()), ($this->privates['scheb_two_factor.provider_preparation_recorder'] ?? $this->getSchebTwoFactor_ProviderPreparationRecorderService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), 'contao_frontend', true, false);
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(($this->services['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /*
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => false, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ar.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.ar.xliff')], 'az' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.bg.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.bg.xliff')], 'bs' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.bs.xlf')], 'ca' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ca.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.ca.xliff')], 'cs' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.cs.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.cs.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.cs.xliff'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.cs.xlf'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.cs.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.da.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.da.xliff')], 'de' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.de.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.de.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.de.xliff'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.de.xlf'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.de.xlf')], 'el' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.en.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.en.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.en.xliff'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'maintenance-bundle-deprecated/Resources/translations'.\DIRECTORY_SEPARATOR.'maintenance.en.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.en.xlf'), 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.en.xlf')], 'es' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.es.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.es.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.es.xliff'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.es.xlf'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.es.xlf')], 'et' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.eu.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.eu.xliff')], 'fa' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.fa.xlf')], 'fi' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.fi.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.fi.xliff')], 'fr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.fr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.fr.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.fr.xliff'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'maintenance-bundle-deprecated/Resources/translations'.\DIRECTORY_SEPARATOR.'maintenance.fr.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.fr.xlf'), 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.fr.xlf')], 'gl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.hr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.hr.yml')], 'hu' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.hu.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.hu.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.hu.xliff')], 'hy' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.id.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.id.xliff')], 'it' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.it.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.it.xliff'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.it.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.it.xlf')], 'ja' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ja.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.ja.xliff'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.ja.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.ja.xlf')], 'lb' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.lt.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.lt.xliff')], 'lv' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.lv.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.lv.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.mn.xlf')], 'my' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.my.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.nb.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.nb.xliff')], 'nl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.nl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.nl.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.nl.xliff'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.nl.xlf')], 'nn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.nn.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.nn.xliff')], 'no' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.no.xlf')], 'pl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.pl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.pl.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.pl.xliff'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.pl.xlf'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.pl.xlf')], 'pt' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.pt.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.pt.xliff')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.pt_BR.xliff')], 'ro' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ro.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.ro.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.ro.xliff')], 'ru' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ru.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.ru.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.ru.xliff'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.ru.xlf'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.ru.xlf')], 'sk' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sk.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.sk.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.sk.xliff')], 'sl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.sl.xliff'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.sl.xlf')], 'sq' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sv.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.sv.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.sv.xliff'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.sv.xlf'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.sv.xlf')], 'th' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.th.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.th.xliff')], 'tl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.tr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.tr.xliff'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.tr.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.tr.xlf')], 'uk' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.uk.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'SchebTwoFactorBundle.uk.yml'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.uk.xliff')], 'uz' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.uz.xlf')], 'vi' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.vi.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.vi.xliff')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.zh_CN.xliff')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.zh_TW.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.zh_TW.xliff')], 'bs_Latn_BA' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.bs_Latn_BA.xliff')], 'eo' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.eo.xliff')], 'hr_HR' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.hr_HR.xliff')], 'ky' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.ky.xliff')], 'pt_PT' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.pt_PT.xliff')], 'sr_Latin' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.sr_Latin.xliff')], 'zh' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.zh.xliff')], 'zh_HK' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'time.zh_HK.xliff')], 'sr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoManagerBundle.sr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'.\DIRECTORY_SEPARATOR.'ContaoInstallationBundle.sr.xlf')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'maintenance-bundle-deprecated/Resources/translations'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'), 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/translations'), 7 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/DoctrineBundle/translations', 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/translations'), 9 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/FrameworkBundle/translations', 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bundle/translations'), 11 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/MonologBundle/translations', 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 13 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/FOSHttpCacheBundle/translations', 14 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'cors-bundle/translations'), 15 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/NelmioCorsBundle/translations', 16 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle/translations'), 17 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/NelmioSecurityBundle/translations', 18 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/SchebTwoFactorBundle/translations', 19 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extra-bundle/translations'), 20 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/TwigExtraBundle/translations', 21 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 22 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/KnpMenuBundle/translations', 23 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/KnpTimeBundle/translations', 24 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 25 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/CmfRoutingBundle/translations', 26 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/translations'), 27 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/TwigBundle/translations', 28 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'terminal42'.\DIRECTORY_SEPARATOR.'service-annotation-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 29 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/Terminal42ServiceAnnotationBundle/translations', 30 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/LexikMaintenanceBundle/translations', 31 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/translations'), 32 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/SecurityBundle/translations', 33 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 34 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/ContaoCoreBundle/translations', 35 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/ContaoManagerBundle/translations', 36 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/ContaoInstallationBundle/translations', 37 => (\dirname(__DIR__, 4).'/translations'), 38 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/translations'], 'cache_vary' => ['scanned_directories' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle/Resources/translations'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'maintenance-bundle-deprecated/Resources/translations'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'), 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/translations'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/translations'), 7 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/DoctrineBundle/translations', 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/translations'), 9 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/FrameworkBundle/translations', 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bundle/translations'), 11 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/MonologBundle/translations', 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 13 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/FOSHttpCacheBundle/translations', 14 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'cors-bundle/translations'), 15 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/NelmioCorsBundle/translations', 16 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle/translations'), 17 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/NelmioSecurityBundle/translations', 18 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/SchebTwoFactorBundle/translations', 19 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extra-bundle/translations'), 20 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/TwigExtraBundle/translations', 21 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 22 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/KnpMenuBundle/translations', 23 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/KnpTimeBundle/translations', 24 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 25 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/CmfRoutingBundle/translations', 26 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/translations'), 27 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/TwigBundle/translations', 28 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'terminal42'.\DIRECTORY_SEPARATOR.'service-annotation-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 29 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/Terminal42ServiceAnnotationBundle/translations', 30 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/LexikMaintenanceBundle/translations', 31 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/translations'), 32 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/SecurityBundle/translations', 33 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 34 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/ContaoCoreBundle/translations', 35 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/ContaoManagerBundle/translations', 36 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/ContaoInstallationBundle/translations', 37 => 'translations', 38 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app/Resources/translations']]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /*
     * Gets the public 'contao.csrf.token_manager' alias.
     *
     * @return object The "Contao\CoreBundle\Csrf\ContaoCsrfTokenManager" service.
     */
    protected function getContao_Csrf_TokenManagerService()
    {
        @trigger_error('Using the "contao.csrf.token_manager" service ID has been deprecated and will no longer work in Contao 5.0. Please use "Contao\\CoreBundle\\Csrf\\ContaoCsrfTokenManager" instead.', E_USER_DEPRECATED);

        return $this->get('Contao\\CoreBundle\\Csrf\\ContaoCsrfTokenManager');
    }

    /**
     * @return array|bool|float|int|string|\UnitEnum|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'doctrine.orm.proxy_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/app',
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'logs'),
            'kernel.bundles' => [
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'FOSHttpCacheBundle' => 'FOS\\HttpCacheBundle\\FOSHttpCacheBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'NelmioSecurityBundle' => 'Nelmio\\SecurityBundle\\NelmioSecurityBundle',
                'SchebTwoFactorBundle' => 'Scheb\\TwoFactorBundle\\SchebTwoFactorBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'KnpTimeBundle' => 'Knp\\Bundle\\TimeBundle\\KnpTimeBundle',
                'CmfRoutingBundle' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\CmfRoutingBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'Terminal42ServiceAnnotationBundle' => 'Terminal42\\ServiceAnnotationBundle\\Terminal42ServiceAnnotationBundle',
                'LexikMaintenanceBundle' => 'Lexik\\Bundle\\MaintenanceBundle\\LexikMaintenanceBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'ContaoCoreBundle' => 'Contao\\CoreBundle\\ContaoCoreBundle',
                'ContaoManagerBundle' => 'Contao\\ManagerBundle\\ContaoManagerBundle',
                'ContaoInstallationBundle' => 'Contao\\InstallationBundle\\ContaoInstallationBundle',
            ],
            'kernel.bundles_metadata' => [
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'FOSHttpCacheBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'http-cache-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'FOS\\HttpCacheBundle',
                ],
                'NelmioCorsBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ],
                'NelmioSecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'security-bundle'),
                    'namespace' => 'Nelmio\\SecurityBundle',
                ],
                'SchebTwoFactorBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'),
                    'namespace' => 'Scheb\\TwoFactorBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extra-bundle'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'KnpMenuBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ],
                'KnpTimeBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle'),
                    'namespace' => 'Knp\\Bundle\\TimeBundle',
                ],
                'CmfRoutingBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony-cmf'.\DIRECTORY_SEPARATOR.'routing-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Symfony\\Cmf\\Bundle\\RoutingBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'Terminal42ServiceAnnotationBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'terminal42'.\DIRECTORY_SEPARATOR.'service-annotation-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Terminal42\\ServiceAnnotationBundle',
                ],
                'LexikMaintenanceBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'maintenance-bundle-deprecated'),
                    'namespace' => 'Lexik\\Bundle\\MaintenanceBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'ContaoCoreBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'core-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Contao\\CoreBundle',
                ],
                'ContaoManagerBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'manager-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Contao\\ManagerBundle',
                ],
                'ContaoInstallationBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'contao'.\DIRECTORY_SEPARATOR.'installation-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Contao\\InstallationBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appContao_ManagerBundle_HttpKernel_ContaoKernelProdContainer',
            'database_host' => 'localhost',
            'database_port' => 3306,
            'database_user' => NULL,
            'database_password' => NULL,
            'database_name' => NULL,
            'mailer_transport' => 'sendmail',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'mailer_port' => 25,
            'mailer_encryption' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'locale' => 'en',
            'container.dumper.inline_class_loader' => true,
            'env(DATABASE_URL)' => 'pdo-mysql://localhost:3306',
            'env(APP_SECRET)' => 'ThisTokenIsNotSoSecretChangeIt',
            'env(MAILER_DSN)' => 'native://default',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [
                'binary_string' => [
                    'class' => 'Contao\\CoreBundle\\Doctrine\\DBAL\\Types\\BinaryStringType',
                ],
            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.metadata.attribute.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AttributeDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
                'Nelmio\\SecurityBundle\\ContentSecurityPolicy\\Violation\\ReportEvent' => 'csp.violation.report',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent' => 'security.authentication.success',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent' => 'security.authentication.failure',
                'Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent' => 'security.interactive_login',
                'Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent' => 'security.switch_user',
                'Contao\\CoreBundle\\Event\\GenerateSymlinksEvent' => 'contao.generate_symlinks',
                'Contao\\CoreBundle\\Event\\MenuEvent' => 'contao.backend_menu_build',
                'Contao\\CoreBundle\\Event\\PreviewUrlCreateEvent' => 'contao.preview_url_create',
                'Contao\\CoreBundle\\Event\\PreviewUrlConvertEvent' => 'contao.preview_url_convert',
                'Contao\\CoreBundle\\Event\\RobotsTxtEvent' => 'contao.robots_txt',
                'Contao\\CoreBundle\\Event\\SlugValidCharactersEvent' => 'contao.slug_valid_characters',
                'Contao\\InstallationBundle\\Event\\InitializeApplicationEvent' => 'contao_installation.initialize_application',
            ],
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'contao_manager.routing_loader::loadFromPlugins',
            'router.cache_class_prefix' => 'appContao_ManagerBundle_HttpKernel_ContaoKernelProdContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
                'monolog.handler.contao' => NULL,
            ],
            'fos_http_cache.cacheable.response.additional_status' => [

            ],
            'fos_http_cache.proxy_client.symfony.options' => [
                'tags_header' => 'X-Cache-Tags',
                'tags_method' => 'PURGETAGS',
                'purge_method' => 'PURGE',
            ],
            'fos_http_cache.cache_manager.generate_url_type' => 0,
            'fos_http_cache.compiler_pass.tag_annotations' => false,
            'fos_http_cache.tag_handler.response_header' => 'X-Cache-Tags',
            'fos_http_cache.tag_handler.separator' => ',',
            'fos_http_cache.tag_handler.strict' => false,
            'nelmio_cors.map' => [

            ],
            'nelmio_cors.defaults' => [
                'allow_origin' => [

                ],
                'allow_credentials' => false,
                'allow_headers' => [

                ],
                'expose_headers' => [

                ],
                'allow_methods' => [

                ],
                'max_age' => 0,
                'hosts' => [

                ],
                'origin_regex' => false,
                'forced_allow_origin_value' => NULL,
            ],
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'nelmio_security.clickjacking.paths' => [
                '^/.*' => [
                    'header' => 'SAMEORIGIN',
                ],
            ],
            'nelmio_security.clickjacking.content_types' => [

            ],
            'nelmio_security.nonce_generator.number_of_bytes' => 16,
            'nelmio_security.csp.hash_algorithm' => 'sha256',
            'nelmio_security.csp.report_log_level' => 'notice',
            'nelmio_security.content_type.nosniff' => true,
            'nelmio_security.referrer_policy.policies' => [
                0 => 'no-referrer-when-downgrade',
                1 => 'strict-origin-when-cross-origin',
            ],
            'scheb_two_factor.model_manager_name' => NULL,
            'scheb_two_factor.security_tokens' => [
                0 => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken',
                1 => 'Symfony\\Component\\Security\\Guard\\Token\\PostAuthenticationGuardToken',
                2 => 'Symfony\\Component\\Security\\Http\\Authenticator\\Token\\PostAuthenticationToken',
            ],
            'scheb_two_factor.ip_whitelist' => [

            ],
            'scheb_two_factor.trusted_device.enabled' => true,
            'scheb_two_factor.trusted_device.cookie_name' => 'trusted_device',
            'scheb_two_factor.trusted_device.lifetime' => 5184000,
            'scheb_two_factor.trusted_device.extend_lifetime' => false,
            'scheb_two_factor.trusted_device.cookie_secure' => NULL,
            'scheb_two_factor.trusted_device.cookie_same_site' => 'lax',
            'scheb_two_factor.trusted_device.cookie_domain' => NULL,
            'scheb_two_factor.trusted_device.cookie_path' => '/',
            'knp_menu.renderer.list.options' => [

            ],
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => [

            ],
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'time.datetime_formatter.class' => 'Knp\\Bundle\\TimeBundle\\DateTimeFormatter',
            'time.twig.extension.time.class' => 'Knp\\Bundle\\TimeBundle\\Twig\\Extension\\TimeExtension',
            'cmf_routing.replace_symfony_router' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'lexik_maintenance.listener.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Listener\\MaintenanceListener',
            'lexik_maintenance.driver_factory.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\DriverFactory',
            'lexik_maintenance.driver.database.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\DatabaseDriver',
            'lexik_maintenance.driver' => [
                'class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\FileDriver',
                'options' => [
                    'file_path' => (\dirname(__DIR__, 4).'/var/maintenance_lock'),
                ],
                'ttl' => NULL,
            ],
            'lexik_maintenance.authorized.path' => '^/contao($|/)',
            'lexik_maintenance.authorized.host' => NULL,
            'lexik_maintenance.authorized.ips' => NULL,
            'lexik_maintenance.authorized.query' => [

            ],
            'lexik_maintenance.authorized.cookie' => [

            ],
            'lexik_maintenance.authorized.route' => NULL,
            'lexik_maintenance.authorized.attributes' => [
                '_bypass_maintenance' => true,
            ],
            'lexik_maintenance.response.http_code' => 503,
            'lexik_maintenance.response.http_status' => 'Service Temporarily Unavailable',
            'lexik_maintenance.response.exception_message' => 'Service Temporarily Unavailable',
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'contao.web_dir' => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/public',
            'contao.upload_path' => 'files',
            'contao.editable_files' => 'css,csv,html,ini,js,json,less,md,scss,svg,svgz,txt,xliff,xml,yml,yaml',
            'contao.preview_script' => '/preview.php',
            'contao.csrf_cookie_prefix' => 'csrf_',
            'contao.csrf_token_name' => 'contao_csrf_token',
            'contao.pretty_error_screens' => true,
            'contao.error_level' => 8183,
            'contao.locales' => [
                0 => 'en',
                1 => 'cs',
                2 => 'de',
                3 => 'es',
                4 => 'fa',
                5 => 'fr',
                6 => 'it',
                7 => 'ja',
                8 => 'lv',
                9 => 'nl',
                10 => 'pl',
                11 => 'ru',
                12 => 'sl',
                13 => 'sr',
                14 => 'sv',
                15 => 'zh',
            ],
            'contao.image.bypass_cache' => false,
            'contao.image.target_dir' => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/assets/images',
            'contao.image.valid_extensions' => [
                0 => 'jpg',
                1 => 'jpeg',
                2 => 'gif',
                3 => 'png',
                4 => 'tif',
                5 => 'tiff',
                6 => 'bmp',
                7 => 'svg',
                8 => 'svgz',
                9 => 'webp',
            ],
            'contao.image.imagine_options' => [
                'jpeg_quality' => 80,
                'jpeg_sampling_factors' => [
                    0 => 2,
                    1 => 1,
                    2 => 1,
                ],
                'interlace' => 'plane',
            ],
            'contao.image.reject_large_uploads' => false,
            'contao.security.two_factor.enforce_backend' => false,
            'contao.localconfig' => [

            ],
            'contao.backend' => [
                'attributes' => [

                ],
                'custom_css' => [

                ],
                'custom_js' => [

                ],
                'badge_title' => '',
            ],
            'contao.intl.locales' => [

            ],
            'contao.intl.enabled_locales' => [

            ],
            'contao.intl.countries' => [

            ],
            'contao.sanitizer.allowed_url_protocols' => [
                0 => 'http',
                1 => 'https',
                2 => 'ftp',
                3 => 'mailto',
                4 => 'tel',
                5 => 'data',
                6 => 'skype',
                7 => 'whatsapp',
            ],
            'contao.search.default_indexer.enable' => true,
            'contao.search.index_protected' => false,
            'contao.legacy_routing' => true,
            'contao.prepend_locale' => false,
            'contao.url_suffix' => '.html',
            'contao_manager.manager_path' => NULL,
            'kernel.packages' => [
                'ausi/slug-generator' => '1.1.1',
                'bacon/bacon-qr-code' => '2.0.7',
                'beberlei/assert' => '3.3.2',
                'clue/stream-filter' => '1.6.0',
                'composer/ca-bundle' => '1.3.4',
                'composer/package-versions-deprecated' => '1.11.99.5',
                'composer/pcre' => '1.0.1',
                'composer/semver' => '3.3.2',
                'composer/xdebug-handler' => '2.0.5',
                'contao-components/ace' => '1.11.2',
                'contao-components/chosen' => '1.2.5',
                'contao-components/colorbox' => '1.6.6',
                'contao-components/colorpicker' => '1.5.2',
                'contao-components/contao' => '9.3.2',
                'contao-components/datepicker' => '2.3.2',
                'contao-components/dropzone' => '5.9.3',
                'contao-components/installer' => '1.4.1',
                'contao-components/jquery' => '3.6.1',
                'contao-components/jquery-ui' => '1.13.1',
                'contao-components/mediabox' => '1.5.5',
                'contao-components/mootools' => '1.6.0.6',
                'contao-components/simplemodal' => '2.1.1',
                'contao-components/swipe' => '2.2.0',
                'contao-components/tablesort' => '4.0.1',
                'contao-components/tablesorter' => '2.31.3',
                'contao-components/tinymce4' => '5.10.5',
                'contao/conflicts' => 'dev-main',
                'contao/core-bundle' => '4.12.7',
                'contao/image' => '1.1.2',
                'contao/imagine-svg' => '1.0.3',
                'contao/installation-bundle' => '4.12.7',
                'contao/maintenance-bundle-deprecated' => '2.1.9',
                'contao/manager-bundle' => '4.12.7',
                'contao/manager-plugin' => '2.12.0',
                'contao/phpstan' => '0.12.9',
                'contao/polyfill-symfony' => '1.0.0',
                'contao/test-case' => '4.13.11',
                'dasprid/enum' => '1.0.3',
                'doctrine/annotations' => '1.13.3',
                'doctrine/cache' => '2.2.0',
                'doctrine/collections' => '1.8.0',
                'doctrine/common' => '3.4.3',
                'doctrine/data-fixtures' => '1.5.3',
                'doctrine/dbal' => '2.13.9',
                'doctrine/deprecations' => '1.0.0',
                'doctrine/doctrine-bundle' => '2.7.0',
                'doctrine/event-manager' => '1.1.2',
                'doctrine/inflector' => '2.0.5',
                'doctrine/instantiator' => '1.4.1',
                'doctrine/lexer' => '1.2.3',
                'doctrine/orm' => '2.13.3',
                'doctrine/persistence' => '2.5.4',
                'doctrine/sql-formatter' => '1.1.3',
                'dragonmantank/cron-expression' => '2.3.1',
                'egulias/email-validator' => '3.2.1',
                'friendsofphp/php-cs-fixer' => '3.4.0',
                'friendsofphp/proxy-manager-lts' => '1.0.12',
                'friendsofsymfony/http-cache' => '2.14.1',
                'friendsofsymfony/http-cache-bundle' => '2.13.0',
                'imagine/imagine' => '1.3.2',
                'knplabs/knp-menu' => '3.3.0',
                'knplabs/knp-menu-bundle' => '3.2.0',
                'knplabs/knp-time-bundle' => '1.19.0',
                'laminas/laminas-code' => '4.7.0',
                'lcobucci/clock' => '2.0.0',
                'lcobucci/jwt' => '4.2.1',
                'league/commonmark' => '1.6.7',
                'maniaxatwork/contao-portfolio-bundle' => 'dev-master',
                'matthiasmullie/minify' => '1.3.69',
                'matthiasmullie/path-converter' => '1.1.3',
                'monolog/monolog' => '2.8.0',
                'myclabs/deep-copy' => '1.11.0',
                'nelmio/cors-bundle' => '2.2.0',
                'nelmio/security-bundle' => '2.12.0',
                'nikic/php-parser' => '4.15.1',
                'nyholm/psr7' => '1.5.1',
                'paragonie/constant_time_encoding' => '2.6.3',
                'paragonie/random_compat' => '9.99.100',
                'patchwork/utf8' => '1.3.3',
                'phar-io/manifest' => '2.0.3',
                'phar-io/version' => '3.2.1',
                'php-cs-fixer/diff' => '2.0.2',
                'php-http/client-common' => '2.6.0',
                'php-http/discovery' => '1.14.3',
                'php-http/httplug' => '2.3.0',
                'php-http/message' => '1.13.0',
                'php-http/message-factory' => '1.0.2',
                'php-http/promise' => '1.1.0',
                'phpspec/php-diff' => '1.1.3',
                'phpstan/phpstan' => '0.12.99',
                'phpstan/phpstan-phpunit' => '0.12.22',
                'phpstan/phpstan-symfony' => '0.12.44',
                'phpunit/php-code-coverage' => '9.2.17',
                'phpunit/php-file-iterator' => '3.0.6',
                'phpunit/php-invoker' => '3.1.1',
                'phpunit/php-text-template' => '2.0.4',
                'phpunit/php-timer' => '5.0.3',
                'phpunit/phpunit' => '9.5.25',
                'psr/cache' => '1.0.1',
                'psr/container' => '1.1.2',
                'psr/event-dispatcher' => '1.0.0',
                'psr/http-client' => '1.0.1',
                'psr/http-factory' => '1.0.1',
                'psr/http-message' => '1.0.1',
                'psr/log' => '1.1.4',
                'ramsey/uuid' => '3.9.6',
                'scheb/2fa-backup-code' => '5.13.2',
                'scheb/2fa-bundle' => '5.13.2',
                'scheb/2fa-trusted-device' => '5.13.2',
                'scrivo/highlight.php' => '9.18.1.9',
                'scssphp/scssphp' => '1.11.0',
                'sebastian/cli-parser' => '1.0.1',
                'sebastian/code-unit' => '1.0.8',
                'sebastian/code-unit-reverse-lookup' => '2.0.3',
                'sebastian/comparator' => '4.0.8',
                'sebastian/complexity' => '2.0.2',
                'sebastian/diff' => '4.0.4',
                'sebastian/environment' => '5.1.4',
                'sebastian/exporter' => '4.0.5',
                'sebastian/global-state' => '5.0.5',
                'sebastian/lines-of-code' => '1.0.3',
                'sebastian/object-enumerator' => '4.0.4',
                'sebastian/object-reflector' => '2.0.4',
                'sebastian/recursion-context' => '4.0.4',
                'sebastian/resource-operations' => '3.0.3',
                'sebastian/type' => '3.2.0',
                'sebastian/version' => '3.0.2',
                'sensiolabs/ansi-to-html' => '1.2.1',
                'simplepie/simplepie' => '1.7.0',
                'spatie/schema-org' => '3.9.0',
                'spomky-labs/otphp' => '10.0.3',
                'symfony-cmf/routing' => '2.3.4',
                'symfony-cmf/routing-bundle' => '2.5.1',
                'symfony/asset' => '5.2.12',
                'symfony/cache' => '5.4.13',
                'symfony/cache-contracts' => '2.5.2',
                'symfony/config' => '4.4.44',
                'symfony/console' => '4.4.47',
                'symfony/debug' => '4.4.44',
                'symfony/debug-bundle' => '4.4.37',
                'symfony/dependency-injection' => '4.4.44',
                'symfony/deprecation-contracts' => '2.5.2',
                'symfony/doctrine-bridge' => '4.4.46',
                'symfony/dom-crawler' => '5.4.12',
                'symfony/dotenv' => '5.4.5',
                'symfony/error-handler' => '4.4.44',
                'symfony/event-dispatcher' => '4.4.44',
                'symfony/event-dispatcher-contracts' => '1.1.13',
                'symfony/expression-language' => '5.4.14',
                'symfony/filesystem' => '5.4.13',
                'symfony/finder' => '5.4.11',
                'symfony/framework-bundle' => '4.4.47',
                'symfony/http-client' => '5.4.14',
                'symfony/http-client-contracts' => '2.5.2',
                'symfony/http-foundation' => '4.4.47',
                'symfony/http-kernel' => '4.4.47',
                'symfony/intl' => '5.4.14',
                'symfony/lock' => '5.4.10',
                'symfony/mailer' => '5.4.13',
                'symfony/mime' => '5.4.14',
                'symfony/monolog-bridge' => '5.2.12',
                'symfony/monolog-bundle' => '3.8.0',
                'symfony/options-resolver' => '5.4.11',
                'symfony/phpunit-bridge' => '5.3.8',
                'symfony/polyfill-ctype' => '1.26.0',
                'symfony/polyfill-intl-grapheme' => '1.26.0',
                'symfony/polyfill-intl-idn' => '1.26.0',
                'symfony/polyfill-intl-normalizer' => '1.26.0',
                'symfony/polyfill-mbstring' => '1.26.0',
                'symfony/polyfill-php72' => '1.26.0',
                'symfony/polyfill-php73' => '1.26.0',
                'symfony/polyfill-php80' => '1.26.0',
                'symfony/polyfill-php81' => '1.26.0',
                'symfony/process' => '5.4.11',
                'symfony/property-access' => '5.4.11',
                'symfony/property-info' => '5.4.14',
                'symfony/proxy-manager-bridge' => '4.4.39',
                'symfony/routing' => '4.4.44',
                'symfony/security-bundle' => '4.4.44',
                'symfony/security-core' => '4.4.47',
                'symfony/security-csrf' => '5.2.12',
                'symfony/security-guard' => '4.4.46',
                'symfony/security-http' => '4.4.44',
                'symfony/service-contracts' => '2.5.2',
                'symfony/stopwatch' => '5.4.13',
                'symfony/string' => '5.4.14',
                'symfony/translation' => '4.4.47',
                'symfony/translation-contracts' => '2.5.2',
                'symfony/twig-bridge' => '4.4.45',
                'symfony/twig-bundle' => '4.4.41',
                'symfony/var-dumper' => '5.4.14',
                'symfony/var-exporter' => '5.4.10',
                'symfony/web-profiler-bundle' => '4.4.47',
                'symfony/yaml' => '5.3.14',
                'terminal42/escargot' => '1.4.1',
                'terminal42/service-annotation-bundle' => '1.1.4',
                'thecodingmachine/safe' => '1.3.3',
                'theseer/tokenizer' => '1.2.1',
                'toflar/psr6-symfony-http-cache-store' => '3.0.1',
                'true/punycode' => '2.1.1',
                'twig/extra-bundle' => '3.4.0',
                'twig/twig' => '3.4.3',
                'ua-parser/uap-php' => '3.9.14',
                'webignition/disallowed-character-terminated-string' => '2.0',
                'webignition/robots-txt-file' => '3.0',
                'webmozart/assert' => '1.11.0',
                'webmozart/path-util' => '2.3.0',
                'wikimedia/less.php' => '1.8.2',
            ],
            'contao.resources_paths' => [
                0 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/vendor/contao/core-bundle/src/Resources/contao',
                1 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/vendor/contao/manager-bundle/src/Resources/contao',
                2 => 'C:/laragon/www/entwicklung/vendor/maniaxatwork/contao-portfolio-bundle/src/Resources/contao',
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.fos_http_cache.command.invalidate_path',
                1 => 'console.command.public_alias.fos_http_cache.command.invalidate_regex',
                2 => 'console.command.public_alias.fos_http_cache.command.refresh_path',
                3 => 'console.command.public_alias.fos_http_cache.command.clear',
                4 => 'console.command.public_alias.Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverLockCommand',
                5 => 'console.command.public_alias.Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverUnlockCommand',
                6 => 'console.command.public_alias.contao.command.install-web-dir',
                7 => 'console.command.public_alias.contao.command.lock',
                8 => 'console.command.public_alias.contao.command.unlock',
            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}
