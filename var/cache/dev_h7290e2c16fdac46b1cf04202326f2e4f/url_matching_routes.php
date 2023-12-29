<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/_action/access-key/intergration' => [[['_route' => 'api.action.access-key.integration', '_routeScope' => ['api'], '_acl' => ['api_action_access-key_integration'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateIntegrationKey'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/access-key/user' => [[['_route' => 'api.action.access-key.user', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateUserKey'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/access-key/sales-channel' => [[['_route' => 'api.action.access-key.sales-channel', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateSalesChannelKey'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/access-key/product-export' => [[['_route' => 'api.action.access-key.product-export', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateProductExportKey'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/acl/privileges' => [[['_route' => 'api.acl.privileges.get', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_acl_privileges_get'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AclController::getPrivileges'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/acl/additional_privileges' => [[['_route' => 'api.acl.privileges.additional.get', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_acl_privileges_additional_get'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AclController::getAdditionalPrivileges'], null, ['GET' => 0], null, false, false, null]],
        '/api/oauth/authorize' => [[['_route' => 'api.oauth.authorize', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AuthController::authorize'], null, ['POST' => 0], null, false, false, null]],
        '/api/oauth/token' => [[['_route' => 'api.oauth.token', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AuthController::token'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/cache_info' => [[['_route' => 'api.action.cache.info', '_routeScope' => ['api'], '_acl' => ['system:cache:info'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::info'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/index' => [[['_route' => 'api.action.cache.index', '_routeScope' => ['api'], '_acl' => ['api_action_cache_index'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/cache_warmup' => [[['_route' => 'api.action.cache.delete_and_warmup', '_routeScope' => ['api'], '_acl' => ['system:clear:cache'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearCacheAndScheduleWarmUp'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/_action/cache' => [[['_route' => 'api.action.cache.delete', '_routeScope' => ['api'], '_acl' => ['system:clear:cache'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearCache'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/_action/cleanup' => [[['_route' => 'api.action.cache.cleanup', '_routeScope' => ['api'], '_acl' => ['system:clear:cache'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearOldCacheFolders'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/_action/container_cache' => [[['_route' => 'api.action.container-cache.delete', '_routeScope' => ['api'], '_acl' => ['system:clear:cache'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearContainerCache'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/_action/custom-snippet' => [[['_route' => 'api.action.custom-snippet', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CustomSnippetFormatController::snippets'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/custom-snippet/render' => [[['_route' => 'api.action.custom-snippet.render', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CustomSnippetFormatController::render'], null, ['POST' => 0], null, false, false, null]],
        '/api/_info/health-check' => [[['_route' => 'api.info.health.check', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\HealthCheckController::check'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/indexing' => [[['_route' => 'api.action.indexing', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IndexingController::indexing'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/index-products' => [[['_route' => 'api.action.indexing.products', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IndexingController::products'], null, ['POST' => 0], null, false, false, null]],
        '/api/_info/openapi3.json' => [[['_route' => 'api.info.openapi3', '_routeScope' => ['api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::info'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/queue.json' => [[['_route' => 'api.info.queue', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::queue'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/open-api-schema.json' => [[['_route' => 'api.info.open-api-schema', '_routeScope' => ['api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::openApiSchema'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/entity-schema.json' => [[['_route' => 'api.info.entity-schema', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::entitySchema'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/events.json' => [[['_route' => 'api.info.business-events', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::businessEvents'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/swagger.html' => [[['_route' => 'api.info.swagger', '_routeScope' => ['api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoHtml'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/config' => [[['_route' => 'api.info.config', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::config'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/version' => [[['_route' => 'api.info.shopware.version', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoShopwareVersion'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/_info/version' => [[['_route' => 'api.info.shopware.version_old_version', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoShopwareVersion'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/flow-actions.json' => [[['_route' => 'api.info.actions', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::flowActions'], null, ['GET' => 0], null, false, false, null]],
        '/api/_proxy/switch-customer' => [[['_route' => 'api.proxy.switch-customer', '_routeScope' => ['api'], '_acl' => ['api_proxy_switch-customer'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::assignCustomer'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_proxy/modify-shipping-costs' => [[['_route' => 'api.proxy.modify-shipping-costs', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::modifyShippingCosts'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_proxy/disable-automatic-promotions' => [[['_route' => 'api.proxy.disable-automatic-promotions', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::disableAutomaticPromotions'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_proxy/enable-automatic-promotions' => [[['_route' => 'api.proxy.enable-automatic-promotions', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::enableAutomaticPromotions'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_action/sync' => [[['_route' => 'api.action.sync', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SyncController::sync'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension/refresh' => [[['_route' => 'api.extension.refresh', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::refreshExtensions'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension/upload' => [[['_route' => 'api.extension.upload', '_routeScope' => ['api'], '_acl' => ['system.plugin_upload'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::uploadExtensions'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension/installed' => [[['_route' => 'api.extension.installed', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreDataController::getInstalledExtensions'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/frw/start' => [[['_route' => 'api.custom.store.frw.start', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwStart'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/language-plugins' => [[['_route' => 'api.custom.store.language-plugins', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getLanguagePluginList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/demo-data-plugins' => [[['_route' => 'api.custom.store.demo-data-plugins', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getDemoDataPluginList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/recommendation-regions' => [[['_route' => 'api.custom.store.recommendation-regions', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getRecommendationRegions'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/recommendations' => [[['_route' => 'api.custom.store.recommendations', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getRecommendations'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/frw/login' => [[['_route' => 'api.custom.store.frw.login', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwLogin'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/license-domains' => [[['_route' => 'api.custom.store.license-domains', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getDomainList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/verify-license-domain' => [[['_route' => 'api.custom.store.verify-license-domain', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::verifyDomain'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/frw/finish' => [[['_route' => 'api.custom.store.frw.finish', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwFinish'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/login' => [[['_route' => 'api.custom.store.login', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/checklogin' => [[['_route' => 'api.custom.store.checklogin', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::checkLogin'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/logout' => [[['_route' => 'api.custom.store.logout', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::logout'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/updates' => [[['_route' => 'api.custom.store.updates', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getUpdateList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/license-violations' => [[['_route' => 'api.custom.store.license-violations', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getLicenseViolations'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/plugin/search' => [[['_route' => 'api.action.store.plugin.search', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::searchPlugins'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/update/check' => [[['_route' => 'api.custom.updateapi.check', '_routeScope' => ['api'], '_acl' => ['system:core:update'], '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::updateApiCheck'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/check-requirements' => [[['_route' => 'api.custom.update.check_requirements', '_routeScope' => ['api'], '_acl' => ['system:core:update'], '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::checkRequirements'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/extension-compatibility' => [[['_route' => 'api.custom.updateapi.extension_compatibility', '_routeScope' => ['api'], '_acl' => ['system:core:update', 'system_config:read'], '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::extensionCompatibility'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/download-recovery' => [[['_route' => 'api.custom.updateapi.download-recovery', '_routeScope' => ['api'], '_acl' => ['system:core:update', 'system_config:read'], '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::downloadLatestRecovery'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/deactivate-plugins' => [[['_route' => 'api.custom.updateapi.deactivate-plugins', '_routeScope' => ['api'], '_acl' => ['system:core:update', 'system_config:read'], '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::deactivatePlugins'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/message-queue/consume' => [[['_route' => 'api.action.message-queue.consume', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\Api\\ConsumeMessagesController::consumeMessages'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/scheduled-task/run' => [[['_route' => 'api.action.scheduled-task.run', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\Api\\ScheduledTaskController::runScheduledTasks'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/scheduled-task/min-run-interval' => [[['_route' => 'api.action.scheduled-task.min-run-interval', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\Api\\ScheduledTaskController::getMinRunInterval'], null, ['GET' => 0], null, false, false, null]],
        '/api/app-system/modules' => [[['_route' => 'api.app_system.modules', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::getModules'], null, ['GET' => 0], null, false, false, null]],
        '/api/app-system/cms/blocks' => [[['_route' => 'api.app_system.cms.blocks', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppCmsController::getBlocks'], null, ['GET' => 0], null, false, false, null]],
        '/api/app-system/app-url-change/strategies' => [[['_route' => 'api.app_system.app-url-change-strategies', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppUrlChangeController::getAvailableStrategies'], null, ['GET' => 0], null, false, false, null]],
        '/api/app-system/app-url-change/resolve' => [[['_route' => 'api.app_system.app-url-change-resolve', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppUrlChangeController::resolve'], null, ['POST' => 0], null, false, false, null]],
        '/api/app-system/app-url-change/url-difference' => [[['_route' => 'api.app_system.app-url-difference', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppUrlChangeController::getUrlDifference'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/rule-config' => [[['_route' => 'api.info.rule-config', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Rule\\Api\\RuleConfigController::getConditionsConfig'], null, ['GET' => 0], null, false, false, null]],
        '/api/usage-data/consent' => [[['_route' => 'api.usage_data.get_consent', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\UsageData\\Api\\ConsentController::getConsent'], null, ['GET' => 0], null, false, false, null]],
        '/api/usage-data/accept-consent' => [[['_route' => 'api.usage_data.accept_consent', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\UsageData\\Api\\ConsentController::acceptConsent'], null, ['POST' => 0], null, false, false, null]],
        '/api/usage-data/revoke-consent' => [[['_route' => 'api.usage_data.revoke_consent', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\UsageData\\Api\\ConsentController::revokeConsent'], null, ['POST' => 0], null, false, false, null]],
        '/api/usage-data/hide-consent-banner' => [[['_route' => 'api.usage_data.hide_consent_banner', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\UsageData\\Api\\ConsentController::hideConsentBanner'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/user/user-recovery' => [[['_route' => 'api.action.user.user-recovery', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::createUserRecovery'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/user/user-recovery/hash' => [[['_route' => 'api.action.user.user-recovery.hash', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::checkUserRecovery'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/user/user-recovery/password' => [[['_route' => 'api.action.user.user-recovery.password', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::updateUserPassword'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_action/user/check-email-unique' => [[['_route' => 'api.action.check-email-unique', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserValidationController::isEmailUnique'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/user/check-username-unique' => [[['_route' => 'api.action.check-username-unique', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserValidationController::isUsernameUnique'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/snippet-set' => [[['_route' => 'api.action.snippet-set.getList', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getList'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/snippet/filter' => [[['_route' => 'api.action.snippet.get.filter', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getFilterItems'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/snippet-set/baseFile' => [[['_route' => 'api.action.snippet-set.base-file', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getBaseFiles'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/snippet-set/author' => [[['_route' => 'api.action.snippet-set.author', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getAuthors'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/attribute-set/relations' => [[['_route' => 'api.action.attribute-set.get-relations', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomField\\Api\\CustomFieldSetActionController::getAvailableRelations'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/system-config/check' => [[['_route' => 'api.action.core.system-config.check', '_routeScope' => ['api'], '_acl' => ['system_config:read'], '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::checkConfiguration'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/system-config/schema' => [[['_route' => 'api.action.core.system-config', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::getConfiguration'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/system-config' => [
            [['_route' => 'api.action.core.system-config.value', '_routeScope' => ['api'], '_acl' => ['system_config:read'], '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::getConfigurationValues'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api.action.core.save.system-config', '_routeScope' => ['api'], '_acl' => ['system_config:update', 'system_config:create', 'system_config:delete'], '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::saveConfiguration'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/_action/system-config/batch' => [[['_route' => 'api.action.core.save.system-config.batch', '_routeScope' => ['api'], '_acl' => ['system_config:update', 'system_config:create', 'system_config:delete'], '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::batchSaveConfiguration'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/_info/openapi3.json' => [[['_route' => 'store-api.info.openapi3', '_routeScope' => ['store-api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::info'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/_info/open-api-schema.json' => [[['_route' => 'store-api.info.open-api-schema', '_routeScope' => ['store-api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::openApiSchema'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/_info/swagger.html' => [[['_route' => 'store-api.info.swagger', '_routeScope' => ['store-api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::infoHtml'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/context' => [
            [['_route' => 'store-api.context', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextRoute::load'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'store-api.switch-context', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextSwitchRoute::switchContext'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/store-api/currency' => [[['_route' => 'store-api.currency', '_routeScope' => ['store-api'], '_entity' => 'currency', '_controller' => 'Shopware\\Core\\System\\Currency\\SalesChannel\\CurrencyRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/language' => [[['_route' => 'store-api.language', '_routeScope' => ['store-api'], '_entity' => 'language', '_controller' => 'Shopware\\Core\\System\\Language\\SalesChannel\\LanguageRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/salutation' => [[['_route' => 'store-api.salutation', '_routeScope' => ['store-api'], '_entity' => 'salutation', '_controller' => 'Shopware\\Core\\System\\Salutation\\SalesChannel\\SalutationRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/country' => [[['_route' => 'store-api.country', '_routeScope' => ['store-api'], '_entity' => 'country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/media/provide-name' => [[['_route' => 'api.action.media.provide-name', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::provideName'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/mail-template/send' => [[['_route' => 'api.action.mail_template.send', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::send'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/mail-template/validate' => [[['_route' => 'api.action.mail_template.validate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/mail-template/build' => [[['_route' => 'api.action.mail_template.build', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::build'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/features' => [[['_route' => 'api.action.import_export.features', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::features'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/import-export/prepare' => [[['_route' => 'api.action.import_export.initiate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::initiate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/process' => [[['_route' => 'api.action.import_export.process', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::process'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/file/download' => [[['_route' => 'api.action.import_export.file.download', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::download'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/import-export/cancel' => [[['_route' => 'api.action.import_export.cancel', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::cancel'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/prepare-template-file-download' => [[['_route' => 'api.action.import_export.template_file.prepare_download', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::prepareTemplateFileDownload'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/mapping-from-template' => [[['_route' => 'api.action.import_export.template_file.mapping', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::mappingFromTemplate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/product-export/validate' => [[['_route' => 'api.action.product_export.validate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ProductExport\\Api\\ProductExportController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/product-export/preview' => [[['_route' => 'api.action.product_export.preview', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ProductExport\\Api\\ProductExportController::preview'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/seo-url-template/validate' => [[['_route' => 'api.seo-url-template.validate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/seo-url-template/preview' => [[['_route' => 'api.seo-url-template.preview', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::preview'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/seo-url-template/context' => [[['_route' => 'api.seo-url-template.context', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::getSeoUrlContext'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/seo-url/canonical' => [[['_route' => 'api.seo-url.canonical', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::updateCanonicalUrl'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_action/seo-url/create-custom-url' => [[['_route' => 'api.seo-url.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::createCustomSeoUrls'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/category' => [[['_route' => 'store-api.category.search', '_routeScope' => ['store-api'], '_entity' => 'category', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryListRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/product' => [[['_route' => 'store-api.product.search', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\ProductListRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/search' => [[['_route' => 'store-api.search', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Search\\ResolvedCriteriaProductSearchRoute::load'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/search-suggest' => [[['_route' => 'store-api.search.suggest', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Suggest\\ProductSuggestRoute::load'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/contact-form' => [[['_route' => 'store-api.contact.form', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\ContactForm\\SalesChannel\\ContactFormRoute::load'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/newsletter/confirm' => [[['_route' => 'store-api.newsletter.confirm', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterConfirmRoute::confirm'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/newsletter/subscribe' => [[['_route' => 'store-api.newsletter.subscribe', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::subscribe'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/newsletter/unsubscribe' => [[['_route' => 'store-api.newsletter.unsubscribe', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterUnsubscribeRoute::unsubscribe'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/seo-url' => [[['_route' => 'store-api.seo.url', '_routeScope' => ['store-api'], '_entity' => 'seo_url', '_controller' => 'Shopware\\Core\\Content\\Seo\\SalesChannel\\SeoUrlRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/sitemap' => [[['_route' => 'store-api.sitemap', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Sitemap\\SalesChannel\\SitemapRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/calculate-price' => [[['_route' => 'api.action.calculate-price', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\PriceActionController::calculate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/calculate-prices' => [[['_route' => 'api.action.calculate-prices', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\PriceActionController::calculatePrices'], null, ['POST' => 0], null, false, false, null]],
        '/payment/finalize-transaction' => [[['_route' => 'payment.finalize.transaction', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\Controller\\PaymentController::finalizeTransaction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/order/document/download' => [[['_route' => 'api.action.download.documents', '_routeScope' => ['api'], '_acl' => ['document:read'], '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::downloadDocuments'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/promotion/setgroup/packager' => [[['_route' => 'api.action.promotion.setgroup.packager', '_routeScope' => ['api'], '_acl' => ['promotion:read'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getSetGroupPackagers'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/setgroup/sorter' => [[['_route' => 'api.action.promotion.setgroup.sorter', '_routeScope' => ['api'], '_acl' => ['promotion:read'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getSetGroupSorters'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/discount/picker' => [[['_route' => 'api.action.promotion.discount.picker', '_routeScope' => ['api'], '_acl' => ['promotion:read'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getDiscountFilterPickers'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/generate-fixed' => [[['_route' => 'api.action.promotion.codes.generate-fixed', '_routeScope' => ['api'], '_acl' => ['promotion.editor'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::generateFixedCode'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/generate-individual' => [[['_route' => 'api.action.promotion.codes.generate-individual', '_routeScope' => ['api'], '_acl' => ['promotion.editor'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::generateIndividualCodes'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/replace-individual' => [[['_route' => 'api.action.promotion.codes.replace-individual', '_routeScope' => ['api'], '_acl' => ['promotion.editor'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::replaceIndividualCodes'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/add-individual' => [[['_route' => 'api.action.promotion.codes.add-individual', '_routeScope' => ['api'], '_acl' => ['promotion.editor'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::addIndividualCodes'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/preview' => [[['_route' => 'api.action.promotion.codes.preview', '_routeScope' => ['api'], '_acl' => ['promotion.editor'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::getCodePreview'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/handle-payment' => [[['_route' => 'store-api.payment.handle', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\HandlePaymentMethodRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/payment-method' => [[['_route' => 'store-api.payment.method', '_routeScope' => ['store-api'], '_entity' => 'payment_method', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\SortedPaymentMethodRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/shipping-method' => [[['_route' => 'store-api.shipping.method', '_routeScope' => ['store-api'], '_entity' => 'shipping_method', '_controller' => 'Shopware\\Core\\Checkout\\Shipping\\SalesChannel\\SortedShippingMethodRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/customer-group-registration/accept' => [[['_route' => 'api.customer-group.accept', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\Api\\CustomerGroupRegistrationActionController::accept'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/customer-group-registration/decline' => [[['_route' => 'api.customer-group.decline', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\Api\\CustomerGroupRegistrationActionController::decline'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/newsletter-recipient' => [[['_route' => 'store-api.newsletter.recipient', '_routeScope' => ['store-api'], '_loginRequired' => true, '_entity' => 'newsletter_recipient', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\AccountNewsletterRecipientRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/account/change-profile' => [[['_route' => 'store-api.account.change-profile', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeCustomerProfileRoute::change'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/change-email' => [[['_route' => 'store-api.account.change-email', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeEmailRoute::change'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/change-language' => [[['_route' => 'store-api.account.change-language', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeLanguageRoute::change'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/change-password' => [[['_route' => 'store-api.account.change-password', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePasswordRoute::change'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/customer-recovery-is-expired' => [[['_route' => 'store-api.account.customer.recovery.is.expired', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerRecoveryIsExpiredRoute::load'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/customer' => [
            [['_route' => 'store-api.account.customer', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_entity' => 'customer', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'store-api.account.customer.delete', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteCustomerRoute::delete'], null, ['DELETE' => 0], null, false, false, null],
        ],
        '/store-api/account/list-address' => [[['_route' => 'store-api.account.address.list.get', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_entity' => 'customer_address', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ListAddressRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/customer/wishlist' => [[['_route' => 'store-api.customer.wishlist.load', '_routeScope' => ['store-api'], '_loginRequired' => true, '_entity' => 'product', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LoadWishlistRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/account/login' => [[['_route' => 'store-api.account.login', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LoginRoute::login'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/logout' => [[['_route' => 'store-api.account.logout', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LogoutRoute::logout'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/customer/wishlist/merge' => [[['_route' => 'store-api.customer.wishlist.merge', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\MergeWishlistProductRoute::merge'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/register-confirm' => [[['_route' => 'store-api.account.register.confirm', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterConfirmRoute::confirm'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/register' => [[['_route' => 'store-api.account.register', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterRoute::register'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/recovery-password-confirm' => [[['_route' => 'store-api.account.recovery.password', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ResetPasswordRoute::resetPassword'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/recovery-password' => [[['_route' => 'store-api.account.recovery.send.mail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SendPasswordRecoveryMailRoute::sendRecoveryMail'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/address' => [[['_route' => 'store-api.account.address.create', '_routeScope' => ['store-api'], 'addressId' => null, '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/order/state/cancel' => [[['_route' => 'store-api.order.state.cancel', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\CancelOrderRoute::cancel'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/order' => [[['_route' => 'store-api.order', '_routeScope' => ['store-api'], '_entity' => 'order', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/order/payment' => [[['_route' => 'store-api.order.set-payment', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\SetPaymentOrderRoute::setPayment'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/checkout/cart' => [
            [['_route' => 'store-api.checkout.cart.delete', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartDeleteRoute::delete'], null, ['DELETE' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.read', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartLoadRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/store-api/checkout/cart/line-item' => [
            [['_route' => 'store-api.checkout.cart.add', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemAddRoute::add'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.remove-item', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemRemoveRoute::remove'], null, ['DELETE' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.update-lineitem', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemUpdateRoute::change'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/store-api/checkout/cart/line-item/delete' => [[['_route' => 'store-api.checkout.cart.remove-item-v2', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemRemoveRoute::remove'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/checkout/order' => [[['_route' => 'store-api.checkout.cart.order', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartOrderRoute::order'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension-sdk/run-action' => [[['_route' => 'api.action.extension-sdk.run-action', '_routeScope' => ['api'], '_controller' => 'Shopware\\Administration\\Controller\\AdminExtensionApiController::runAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension-sdk/sign-uri' => [[['_route' => 'api.action.extension-sdk.sign-uri', '_routeScope' => ['api'], '_controller' => 'Shopware\\Administration\\Controller\\AdminExtensionApiController::signUri'], null, ['POST' => 0], null, false, false, null]],
        '/api/_admin/search' => [[['_route' => 'api.admin.search', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\AdminSearchController::search'], null, ['POST' => 0], null, false, false, null]],
        '/api/_admin/tag-filter-ids' => [[['_route' => 'api.admin.tag-filter-ids', '_routeScope' => ['administration'], '_acl' => ['tag:read'], '_entity' => 'tag', '_controller' => 'Shopware\\Administration\\Controller\\AdminTagController::filterIds'], null, ['POST' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'administration.index', '_routeScope' => ['administration'], 'auth_required' => false, '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/_admin/snippets' => [[['_route' => 'api.admin.snippets', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::snippets'], null, ['GET' => 0], null, false, false, null]],
        '/api/_admin/known-ips' => [[['_route' => 'api.admin.known-ips', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::knownIps'], null, ['GET' => 0], null, false, false, null]],
        '/api/_admin/reset-excluded-search-term' => [[['_route' => 'api.admin.reset-excluded-search-term', '_routeScope' => ['administration'], '_acl' => ['system_config:update', 'system_config:create', 'system_config:delete'], '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::resetExcludedSearchTerm'], null, ['POST' => 0], null, false, false, null]],
        '/api/_admin/check-customer-email-valid' => [[['_route' => 'api.admin.check-customer-email-valid', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::checkCustomerEmailValid'], null, ['POST' => 0], null, false, false, null]],
        '/api/_admin/sanitize-html' => [[['_route' => 'api.admin.sanitize-html', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::sanitizeHtml'], null, ['POST' => 0], null, false, false, null]],
        '/api/notification' => [[['_route' => 'api.notification', '_routeScope' => ['api'], '_acl' => ['notification:create'], '_controller' => 'Shopware\\Administration\\Controller\\NotificationController::saveNotification'], null, ['POST' => 0], null, false, false, null]],
        '/api/notification/message' => [[['_route' => 'api.notification.message', '_routeScope' => ['api'], '_controller' => 'Shopware\\Administration\\Controller\\NotificationController::fetchNotification'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/config-me' => [
            [['_route' => 'api.config_me.get', 'auth_required' => true, '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\UserConfigController::getConfigMe'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api.config_me.update', 'auth_required' => true, '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\UserConfigController::updateConfigMe'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/_admin/es-search' => [[['_route' => 'api.admin.es-search', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Elasticsearch\\Admin\\AdminSearchController::elastic'], null, ['POST' => 0], null, false, false, null]],
        '/account/order' => [[['_route' => 'frontend.account.order.page', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderOverview'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/account/order/cancel' => [[['_route' => 'frontend.account.order.cancel', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::cancelOrder'], null, ['POST' => 0], null, false, false, null]],
        '/account/payment' => [
            [['_route' => 'frontend.account.payment.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountPaymentController::paymentOverview'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.payment.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountPaymentController::savePayment'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account' => [[['_route' => 'frontend.account.home.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/account/profile' => [
            [['_route' => 'frontend.account.profile.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::profileOverview'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.profile.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::saveProfile'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/profile/email' => [[['_route' => 'frontend.account.profile.email.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::saveEmail'], null, ['POST' => 0], null, false, false, null]],
        '/account/profile/password' => [[['_route' => 'frontend.account.profile.password.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::savePassword'], null, ['POST' => 0], null, false, false, null]],
        '/account/profile/delete' => [[['_route' => 'frontend.account.profile.delete', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::deleteProfile'], null, ['POST' => 0], null, false, false, null]],
        '/account/address' => [[['_route' => 'frontend.account.address.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountAddressOverview'], null, ['GET' => 0], null, false, false, null]],
        '/account/address/create' => [[['_route' => 'frontend.account.address.create.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountCreateAddress'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/account/address-book' => [[['_route' => 'frontend.account.addressbook', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::addressBook'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/captcha_list' => [[['_route' => 'api.action.captcha.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Controller\\Api\\CaptchaController::list'], null, ['GET' => 0], null, false, false, null]],
        '/account/login' => [
            [['_route' => 'frontend.account.login.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::loginPage'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.login', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::login'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/guest/login' => [[['_route' => 'frontend.account.guest.login.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::guestLoginPage'], null, ['GET' => 0], null, false, false, null]],
        '/account/logout' => [[['_route' => 'frontend.account.logout.page', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/account/recover' => [
            [['_route' => 'frontend.account.recover.page', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::recoverAccountForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.recover.request', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::generateAccountRecovery'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/recover/password' => [
            [['_route' => 'frontend.account.recover.password.page', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::resetPasswordForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.recover.password.reset', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::resetPassword'], null, ['POST' => 0], null, false, false, null],
        ],
        '/basic-captcha' => [[['_route' => 'frontend.captcha.basic-captcha.load', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CaptchaController::loadBasicCaptcha'], null, ['GET' => 0], null, false, false, null]],
        '/basic-captcha-validate' => [[['_route' => 'frontend.captcha.basic-captcha.validate', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CaptchaController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/line-item/delete' => [[['_route' => 'frontend.checkout.line-items.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItems'], null, ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        '/checkout/promotion/add' => [[['_route' => 'frontend.checkout.promotion.add', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addPromotion'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/line-item/update' => [[['_route' => 'frontend.checkout.line-items.update', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::updateLineItems'], null, ['POST' => 0, 'PATCH' => 1], null, false, false, null]],
        '/checkout/product/add-by-number' => [[['_route' => 'frontend.checkout.product.add-by-number', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addProductByNumber'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/line-item/add' => [[['_route' => 'frontend.checkout.line-item.add', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addLineItems'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/cart' => [[['_route' => 'frontend.checkout.cart.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::cartPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/cart.json' => [[['_route' => 'frontend.checkout.cart.json', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::cartJson'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/confirm' => [[['_route' => 'frontend.checkout.confirm.page', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::confirmPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/finish' => [[['_route' => 'frontend.checkout.finish.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::finishPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/order' => [[['_route' => 'frontend.checkout.finish.order', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::order'], null, ['POST' => 0], null, false, false, null]],
        '/widgets/checkout/info' => [[['_route' => 'frontend.checkout.info', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::info'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/offcanvas' => [[['_route' => 'frontend.cart.offcanvas', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/configure' => [[['_route' => 'frontend.checkout.configure', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ContextController::configure'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/language' => [[['_route' => 'frontend.checkout.switch-language', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\ContextController::switchLanguage'], null, ['POST' => 0], null, false, false, null]],
        '/cookie/offcanvas' => [[['_route' => 'frontend.cookie.offcanvas', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CookieController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/cookie/permission' => [[['_route' => 'frontend.cookie.permission', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CookieController::permission'], null, ['GET' => 0], null, false, false, null]],
        '/country/country-state-data' => [[['_route' => 'frontend.country.country.data', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CountryStateController::getCountryData'], null, ['POST' => 0], null, false, false, null]],
        '/form/contact' => [[['_route' => 'frontend.form.contact.send', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_captcha' => true, '_controller' => 'Shopware\\Storefront\\Controller\\FormController::sendContactForm'], null, ['POST' => 0], null, false, false, null]],
        '/form/newsletter' => [[['_route' => 'frontend.form.newsletter.register.handle', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_captcha' => true, '_controller' => 'Shopware\\Storefront\\Controller\\FormController::handleNewsletter'], null, ['POST' => 0], null, false, false, null]],
        '/maintenance' => [[['_route' => 'frontend.maintenance.page', '_routeScope' => ['storefront'], 'allow_maintenance' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderMaintenancePage'], null, ['GET' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'frontend.home.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::home'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'root.fallback'], null, null, null, false, false, null],
        ],
        '/widgets/menu/offcanvas' => [[['_route' => 'frontend.menu.offcanvas', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/newsletter-subscribe' => [[['_route' => 'frontend.newsletter.subscribe', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\NewsletterController::subscribeMail'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/account/newsletter' => [[['_route' => 'frontend.account.newsletter', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NewsletterController::subscribeCustomer'], null, ['POST' => 0], null, false, false, null]],
        '/account/register' => [
            [['_route' => 'frontend.account.register.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::accountRegisterPage'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.register.save', '_routeScope' => ['storefront'], '_captcha' => true, '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::register'], null, ['POST' => 0], null, false, false, null],
        ],
        '/checkout/register' => [[['_route' => 'frontend.checkout.register.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::checkoutRegisterPage'], null, ['GET' => 0], null, false, false, null]],
        '/registration/confirm' => [[['_route' => 'frontend.account.register.mail', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::confirmRegistration'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'frontend.search.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::search'], null, ['GET' => 0], null, false, false, null]],
        '/suggest' => [[['_route' => 'frontend.search.suggest', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::suggest'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/search' => [[['_route' => 'widgets.search.pagelet.v2', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::ajax'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/widgets/search/filter' => [[['_route' => 'widgets.search.filter', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::filter'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'frontend.sitemap.xml', '_routeScope' => ['storefront'], '_format' => 'xml', '_controller' => 'Shopware\\Storefront\\Controller\\SitemapController::sitemapXml'], null, ['GET' => 0], null, false, false, null]],
        '/sw-domain-hash.html' => [[['_route' => 'api.verification-hash.load', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Storefront\\Controller\\VerificationHashController::load'], null, ['GET' => 0], null, false, false, null]],
        '/.well-known/change-password' => [[['_route' => 'frontend.well-known.change-password', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\WellKnownController::changePassword'], null, ['GET' => 0], null, false, false, null]],
        '/wishlist' => [[['_route' => 'frontend.wishlist.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::index'], null, ['GET' => 0], null, false, false, null]],
        '/wishlist/guest-pagelet' => [[['_route' => 'frontend.wishlist.guestPage.pagelet', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::guestPagelet'], null, ['POST' => 0], null, false, false, null]],
        '/widgets/wishlist' => [[['_route' => 'widgets.wishlist.pagelet', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxPagination'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/wishlist/list' => [[['_route' => 'frontend.wishlist.product.list', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxList'], null, ['GET' => 0], null, false, false, null]],
        '/wishlist/merge' => [[['_route' => 'frontend.wishlist.product.merge', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxMerge'], null, ['POST' => 0], null, false, false, null]],
        '/wishlist/merge/pagelet' => [[['_route' => 'frontend.wishlist.product.merge.pagelet', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxPagelet'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_info/me' => [
            [['_route' => 'api.info.me', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::me'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api.change.me', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user_change_me'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateMe'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/api/_info/ping' => [[['_route' => 'api.info.ping', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::status'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|p(?'
                        .'|i/(?'
                            .'|_(?'
                                .'|a(?'
                                    .'|ction/(?'
                                        .'|i(?'
                                            .'|n(?'
                                                .'|dexing/([^/]++)(*:61)'
                                                .'|crement/([^/]++)(?'
                                                    .'|(*:87)'
                                                .')'
                                            .')'
                                            .'|mport\\-export/file/prepare\\-download/([^/]++)(*:141)'
                                        .')'
                                        .'|extension/(?'
                                            .'|d(?'
                                                .'|ownload/([^/]++)(*:183)'
                                                .'|eactivate/([^/]++)/([^/]++)(*:218)'
                                            .')'
                                            .'|install/([^/]++)/([^/]++)(*:252)'
                                            .'|u(?'
                                                .'|ninstall/([^/]++)/([^/]++)(*:290)'
                                                .'|pdate/([^/]++)/([^/]++)(*:321)'
                                            .')'
                                            .'|remove/([^/]++)/([^/]++)(*:354)'
                                            .'|activate/([^/]++)/([^/]++)(*:388)'
                                        .')'
                                        .'|d(?'
                                            .'|ecrement/([^/]++)(*:418)'
                                            .'|ocument/([^/]++)/(?'
                                                .'|([^/]++)(*:454)'
                                                .'|upload(*:468)'
                                            .')'
                                        .')'
                                        .'|reset\\-increment/([^/]++)(*:503)'
                                        .'|clone/([a-zA-Z-]+)/([0-9a-f]{32})(*:544)'
                                        .'|version/(?'
                                            .'|([a-zA-Z-]+)/([0-9a-f]{32})(*:590)'
                                            .'|merge/([a-zA-Z-]+)/([0-9a-f]{32})(*:631)'
                                            .'|([^/]++)/([a-zA-Z-]+)/([^/]++)(*:669)'
                                        .')'
                                        .'|number\\-range/(?'
                                            .'|reserve/([^/]++)(?:/([^/]++))?(*:725)'
                                            .'|preview\\-pattern(?:/([^/]++))?(*:763)'
                                        .')'
                                        .'|s(?'
                                            .'|tate\\-machine/([^/]++)/([^/]++)/state(?'
                                                .'|(*:816)'
                                                .'|/([^/]++)(*:833)'
                                            .')'
                                            .'|eo\\-url\\-template/default/([^/]++)(*:876)'
                                        .')'
                                        .'|product/([^/]++)/combinations(*:914)'
                                        .'|media(?'
                                            .'|\\-folder/([^/]++)/dissolve(*:956)'
                                            .'|/([^/]++)/(?'
                                                .'|upload(*:983)'
                                                .'|rename(*:997)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|rigger\\-event/([^/]++)(*:1033)'
                                            .'|heme/([^/]++)(?'
                                                .'|/(?'
                                                    .'|configuration(*:1075)'
                                                    .'|assign/([^/]++)(*:1099)'
                                                    .'|reset(*:1113)'
                                                    .'|structured\\-fields(*:1140)'
                                                .')'
                                                .'|(*:1150)'
                                            .')'
                                        .')'
                                        .'|order(?'
                                            .'|/(?'
                                                .'|([^/]++)/(?'
                                                    .'|c(?'
                                                        .'|onvert\\-to\\-cart(*:1205)'
                                                        .'|reditItem(*:1223)'
                                                    .')'
                                                    .'|recalculate(*:1244)'
                                                    .'|pro(?'
                                                        .'|duct/([^/]++)(*:1272)'
                                                        .'|motion\\-item(*:1293)'
                                                    .')'
                                                    .'|lineItem(*:1311)'
                                                    .'|toggleAutomaticPromotions(*:1345)'
                                                    .'|([^/]++)/document/([^/]++)/preview(*:1388)'
                                                .')'
                                                .'|document/([^/]++)/create(*:1422)'
                                                .'|([^/]++)/state/([^/]++)(*:1454)'
                                            .')'
                                            .'|\\-address/([^/]++)/customer\\-address/([^/]++)(*:1509)'
                                            .'|_(?'
                                                .'|transaction(?'
                                                    .'|/([^/]++)/state/([^/]++)(*:1560)'
                                                    .'|_capture_refund/([^/]++)(*:1593)'
                                                .')'
                                                .'|delivery/([^/]++)/state/([^/]++)(*:1635)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|dmin/(?'
                                        .'|product\\-stream\\-preview/([^/]++)(*:1688)'
                                        .'|dashboard/order\\-amount/([^/]++)(*:1729)'
                                    .')'
                                .')'
                                .'|proxy(?'
                                    .'|/store\\-api/([^/]++)/(.*)(*:1773)'
                                    .'|\\-order/([^/]++)(*:1798)'
                                .')'
                            .')'
                            .'|license/(?'
                                .'|cancel/([^/]++)(*:1835)'
                                .'|rate/([^/]++)(*:1857)'
                            .')'
                            .'|a(?'
                                .'|pp(?'
                                    .'|\\-system/action\\-button/(?'
                                        .'|([^/]++)/([^/]++)(*:1920)'
                                        .'|run/([^/]++)(*:1941)'
                                    .')'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:2020)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:2086)'
                                    .')'
                                    .'|\\-(?'
                                        .'|a(?'
                                            .'|ction\\-button(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:2190)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:2256)'
                                                .')'
                                                .'|\\-translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:2351)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:2417)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|dministration\\-snippet(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:2523)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:2589)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|cms\\-block(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:2683)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:2749)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:2844)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:2910)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|flow\\-(?'
                                            .'|action(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:3009)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:3075)'
                                                .')'
                                                .'|\\-translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:3170)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:3236)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|event(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:3325)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:3391)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|payment\\-method(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:3490)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:3556)'
                                            .')'
                                        .')'
                                        .'|s(?'
                                            .'|cript\\-condition(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:3659)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:3725)'
                                                .')'
                                                .'|\\-translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:3820)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:3886)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|hipping\\-method(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:3985)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:4051)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|emplate(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:4146)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:4212)'
                                                .')'
                                            .')'
                                            .'|ranslation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:4305)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:4371)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|cl\\-(?'
                                    .'|role(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:4465)'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4527)'
                                    .')'
                                    .'|user\\-role(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:4619)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:4685)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|s(?'
                                .'|cript/(.+)(*:4712)'
                                .'|earch(?'
                                    .'|\\-ids/(?'
                                        .'|c(?'
                                            .'|u(?'
                                                .'|stom(?'
                                                    .'|\\-(?'
                                                        .'|entity(?'
                                                            .'|\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4829)'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4891)'
                                                        .')'
                                                        .'|field(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4962)'
                                                            .'|\\-set(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5032)'
                                                                .'|\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5104)'
                                                            .')'
                                                        .')'
                                                    .')'
                                                    .'|er(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5174)'
                                                        .'|\\-(?'
                                                            .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5248)'
                                                            .'|group(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5318)'
                                                                .'|\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5411)'
                                                            .')'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|rrency(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5486)'
                                                    .'|\\-(?'
                                                        .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5570)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5643)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|e\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5718)'
                                            .'|ategory(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5790)'
                                                .'|\\-t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5860)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5932)'
                                                .')'
                                            .')'
                                            .'|ms\\-(?'
                                                .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6008)'
                                                .'|page(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6077)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6152)'
                                                .')'
                                                .'|s(?'
                                                    .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6225)'
                                                    .'|lot(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6293)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6368)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|ountry(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6442)'
                                                .'|\\-(?'
                                                    .'|state(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6517)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6592)'
                                                    .')'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6666)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|a(?'
                                            .'|cl\\-(?'
                                                .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6746)'
                                                .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6818)'
                                            .')'
                                            .'|pp(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6886)'
                                                .'|\\-(?'
                                                    .'|a(?'
                                                        .'|ction\\-button(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6973)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7048)'
                                                        .')'
                                                        .'|dministration\\-snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7133)'
                                                    .')'
                                                    .'|cms\\-block(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7209)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7284)'
                                                    .')'
                                                    .'|flow\\-(?'
                                                        .'|action(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7365)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7440)'
                                                        .')'
                                                        .'|event((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7508)'
                                                    .')'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7586)'
                                                    .'|s(?'
                                                        .'|cript\\-condition(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7671)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7746)'
                                                        .')'
                                                        .'|hipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7824)'
                                                    .')'
                                                    .'|t(?'
                                                        .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7898)'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7970)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|/(?'
                                        .'|c(?'
                                            .'|u(?'
                                                .'|stom(?'
                                                    .'|\\-(?'
                                                        .'|entity(?'
                                                            .'|\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8079)'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8141)'
                                                        .')'
                                                        .'|field(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8212)'
                                                            .'|\\-set(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8282)'
                                                                .'|\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8354)'
                                                            .')'
                                                        .')'
                                                    .')'
                                                    .'|er(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8424)'
                                                        .'|\\-(?'
                                                            .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8498)'
                                                            .'|group(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8568)'
                                                                .'|\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8661)'
                                                            .')'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|rrency(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8736)'
                                                    .'|\\-(?'
                                                        .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8820)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8893)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|e\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8968)'
                                            .'|ategory(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9040)'
                                                .'|\\-t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9110)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9182)'
                                                .')'
                                            .')'
                                            .'|ms\\-(?'
                                                .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9258)'
                                                .'|page(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9327)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9402)'
                                                .')'
                                                .'|s(?'
                                                    .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9475)'
                                                    .'|lot(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9543)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9618)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|ountry(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9692)'
                                                .'|\\-(?'
                                                    .'|state(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9767)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9842)'
                                                    .')'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9916)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|a(?'
                                            .'|cl\\-(?'
                                                .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9996)'
                                                .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10068)'
                                            .')'
                                            .'|pp(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10137)'
                                                .'|\\-(?'
                                                    .'|a(?'
                                                        .'|ction\\-button(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10225)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10301)'
                                                        .')'
                                                        .'|dministration\\-snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10387)'
                                                    .')'
                                                    .'|cms\\-block(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10464)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10540)'
                                                    .')'
                                                    .'|flow\\-(?'
                                                        .'|action(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10622)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10698)'
                                                        .')'
                                                        .'|event((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10767)'
                                                    .')'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10846)'
                                                    .'|s(?'
                                                        .'|cript\\-condition(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10932)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11008)'
                                                        .')'
                                                        .'|hipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11087)'
                                                    .')'
                                                    .'|t(?'
                                                        .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11162)'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11235)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|c(?'
                                .'|u(?'
                                    .'|stom(?'
                                        .'|\\-(?'
                                            .'|entity(?'
                                                .'|\\-(?'
                                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:11360)'
                                                    .'|([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:11433)'
                                                    .')'
                                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:11521)'
                                                    .')'
                                                .')'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:11602)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:11669)'
                                                .')'
                                            .')'
                                            .'|field(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:11758)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:11825)'
                                                .')'
                                                .'|\\-set(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:11913)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:11980)'
                                                    .')'
                                                    .'|\\-relation(?'
                                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                            .'|(*:12073)'
                                                        .')'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                            .'|(*:12140)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|er(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:12229)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:12296)'
                                            .')'
                                            .'|\\-(?'
                                                .'|address(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:12391)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:12458)'
                                                    .')'
                                                .')'
                                                .'|group(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:12547)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:12614)'
                                                    .')'
                                                    .'|\\-(?'
                                                        .'|registration\\-sales\\-channels(?'
                                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                                .'|(*:12731)'
                                                            .')'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                                .'|(*:12798)'
                                                            .')'
                                                        .')'
                                                        .'|translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:12887)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rrency(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:12980)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:13047)'
                                        .')'
                                        .'|\\-(?'
                                            .'|country\\-rounding(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:13152)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:13219)'
                                                .')'
                                            .')'
                                            .'|translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:13314)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:13381)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|e\\-(?'
                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:13476)'
                                    .'|([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:13549)'
                                    .')'
                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:13637)'
                                    .')'
                                .')'
                                .'|ategory(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:13728)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:13795)'
                                    .')'
                                    .'|\\-t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:13886)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:13953)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:14047)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:14114)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ms\\-(?'
                                    .'|block(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:14212)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:14279)'
                                        .')'
                                    .')'
                                    .'|page(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:14367)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:14434)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:14530)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:14597)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|ection(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:14692)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:14759)'
                                            .')'
                                        .')'
                                        .'|lot(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:14846)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:14913)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:15009)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:15076)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ountry(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:15169)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:15236)'
                                    .')'
                                    .'|\\-(?'
                                        .'|state(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:15329)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:15396)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:15492)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:15559)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:15655)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:15722)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|p\\-system/([^/]++)/generate\\-token(*:15772)'
                    .')'
                    .'|ccount/(?'
                        .'|order/(?'
                            .'|([^/]++)(*:15810)'
                            .'|edit/([^/]++)(*:15833)'
                            .'|payment/([^/]++)(*:15859)'
                            .'|update/([^/]++)(*:15884)'
                            .'|do(?'
                                .'|cument/([^/]++)/([^/]++)(*:15923)'
                                .'|wnload/([^/]++)/([^/]++)(*:15957)'
                            .')'
                        .')'
                        .'|address/(?'
                            .'|([^/]++)(*:15988)'
                            .'|de(?'
                                .'|fault\\-([^/]++)/([^/]++)(*:16027)'
                                .'|lete/([^/]++)(*:16050)'
                            .')'
                            .'|create(*:16067)'
                            .'|([^/]++)(*:16085)'
                        .')'
                    .')'
                .')'
                .'|/store(?'
                    .'|\\-api/(?'
                        .'|a(?'
                            .'|pp\\-system/([^/]++)/generate\\-token(*:16155)'
                            .'|ccount/(?'
                                .'|change\\-payment\\-method/([^/]++)(*:16207)'
                                .'|address/(?'
                                    .'|([^/]++)(*:16236)'
                                    .'|default\\-(?'
                                        .'|shipping/([^/]++)(*:16275)'
                                        .'|billing/([^/]++)(*:16301)'
                                    .')'
                                    .'|([^/]++)(*:16320)'
                                .')'
                            .')'
                        .')'
                        .'|script/(.+)(*:16344)'
                        .'|c(?'
                            .'|ountry\\-state/([^/]++)(*:16380)'
                            .'|ategory/([^/]++)(*:16406)'
                            .'|ms/([^/]++)(*:16427)'
                            .'|ustomer(?'
                                .'|/wishlist/(?'
                                    .'|add/([^/]++)(*:16472)'
                                    .'|delete/([^/]++)(*:16497)'
                                .')'
                                .'|\\-group\\-registration/config/([^/]++)(*:16545)'
                            .')'
                        .')'
                        .'|product(?'
                            .'|\\-(?'
                                .'|export/([^/]++)/([^/]++)(*:16596)'
                                .'|listing/([^/]++)(*:16622)'
                            .')'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|cross\\-selling(*:16663)'
                                    .'|find\\-variant(*:16686)'
                                    .'|review(?'
                                        .'|s(*:16706)'
                                        .'|(*:16716)'
                                    .')'
                                .')'
                                .'|(*:16728)'
                            .')'
                        .')'
                        .'|navigation/([^/]++)/([^/]++)(*:16768)'
                        .'|landing\\-page/([^/]++)(*:16800)'
                        .'|order/download/([^/]++)/([^/]++)(*:16842)'
                        .'|document/download/([^/]++)(?:/([^/]++))?(*:16892)'
                    .')'
                    .'|front/script/(.+)(*:16920)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:16959)'
                .'|/wi(?'
                    .'|dgets/(?'
                        .'|account/order/detail/([^/]++)(*:17013)'
                        .'|cms(?'
                            .'|(?:/([^/]++))?(*:17043)'
                            .'|/(?'
                                .'|navigation(?'
                                    .'|(?:/([^/]++))?(*:17084)'
                                    .'|/([^/]++)/filter(*:17110)'
                                .')'
                                .'|buybox/([^/]++)/switch(*:17143)'
                            .')'
                        .')'
                    .')'
                    .'|shlist/(?'
                        .'|product/delete/([^/]++)(*:17189)'
                        .'|add(?'
                            .'|/([^/]++)(*:17214)'
                            .'|\\-after\\-login/([^/]++)(*:17247)'
                        .')'
                        .'|remove/([^/]++)(*:17273)'
                    .')'
                .')'
                .'|/c(?'
                    .'|heckout/line\\-item/(?'
                        .'|delete/([^/]++)(*:17327)'
                        .'|change\\-quantity/([^/]++)(*:17362)'
                    .')'
                    .'|ustomer\\-group\\-registration/([^/]++)(*:17410)'
                .')'
                .'|/landingPage/([^/]++)(*:17442)'
                .'|/maintenance/singlepage/([^/]++)(*:17484)'
                .'|/navigation/([^/]++)(*:17514)'
                .'|/detail/([^/]++)(?'
                    .'|(*:17543)'
                    .'|/switch(*:17560)'
                .')'
                .'|/quickview/([^/]++)(*:17590)'
                .'|/product/([^/]++)/r(?'
                    .'|ating(*:17627)'
                    .'|eviews(*:17643)'
                .')'
            .')/?$}sDu',
        17643 => '{^(?'
                .'|/api/(?'
                    .'|customer\\-(?'
                        .'|group\\-translation(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:17761)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:17828)'
                            .')'
                        .')'
                        .'|recovery(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:17920)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:17987)'
                            .')'
                        .')'
                        .'|tag(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:18074)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:18141)'
                            .')'
                        .')'
                        .'|wishlist(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:18233)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:18300)'
                            .')'
                            .'|\\-product(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:18392)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:18459)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|search(?'
                        .'|/(?'
                            .'|customer\\-(?'
                                .'|group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18570)'
                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18641)'
                                .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18707)'
                                .'|wishlist(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18781)'
                                    .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18853)'
                                .')'
                            .')'
                            .'|d(?'
                                .'|elivery\\-time(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18938)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19014)'
                                .')'
                                .'|ocument(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19088)'
                                    .'|\\-(?'
                                        .'|base\\-config(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19171)'
                                            .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19250)'
                                        .')'
                                        .'|type(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19321)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19397)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|flow(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19471)'
                                .'|\\-(?'
                                    .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19547)'
                                    .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19618)'
                                .')'
                            .')'
                            .'|i(?'
                                .'|mport\\-export\\-(?'
                                    .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19709)'
                                    .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19775)'
                                    .'|profile(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19848)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19924)'
                                    .')'
                                .')'
                                .'|ntegration(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20002)'
                                    .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20071)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|an(?'
                                    .'|ding\\-page(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20158)'
                                        .'|\\-(?'
                                            .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20240)'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20309)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20382)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20453)'
                                .')'
                                .'|o(?'
                                    .'|cale(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20528)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20604)'
                                    .')'
                                    .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20676)'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ai(?'
                                    .'|l\\-(?'
                                        .'|header\\-footer(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20773)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20849)'
                                        .')'
                                        .'|template(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20924)'
                                            .'|\\-(?'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20997)'
                                                .'|t(?'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21074)'
                                                    .'|ype(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21143)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21219)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21298)'
                                .')'
                                .'|edia(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21369)'
                                    .'|\\-(?'
                                        .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21452)'
                                        .'|folder(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21524)'
                                            .'|\\-configuration(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21605)'
                                                .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21692)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21763)'
                                            .'|humbnail(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21837)'
                                                .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21906)'
                                            .')'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21980)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n(?'
                                .'|ewsletter\\-recipient(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22074)'
                                    .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22142)'
                                .')'
                                .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22217)'
                                .'|umber\\-range(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22295)'
                                    .'|\\-(?'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22380)'
                                            .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22447)'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22525)'
                                            .'|ype(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22594)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22670)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22746)'
                                .'|\\-(?'
                                    .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22821)'
                                    .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22892)'
                                    .'|delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22963)'
                                .')'
                            .')'
                        .')'
                        .'|\\-ids/(?'
                            .'|customer\\-(?'
                                .'|group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23069)'
                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23140)'
                                .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23206)'
                                .'|wishlist(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23280)'
                                    .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23352)'
                                .')'
                            .')'
                            .'|d(?'
                                .'|elivery\\-time(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23437)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23513)'
                                .')'
                                .'|ocument(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23587)'
                                    .'|\\-(?'
                                        .'|base\\-config(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23670)'
                                            .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23749)'
                                        .')'
                                        .'|type(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23820)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23896)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|flow(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23970)'
                                .'|\\-(?'
                                    .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24046)'
                                    .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24117)'
                                .')'
                            .')'
                            .'|i(?'
                                .'|mport\\-export\\-(?'
                                    .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24208)'
                                    .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24274)'
                                    .'|profile(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24347)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24423)'
                                    .')'
                                .')'
                                .'|ntegration(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24501)'
                                    .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24570)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|an(?'
                                    .'|ding\\-page(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24657)'
                                        .'|\\-(?'
                                            .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24739)'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24808)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24881)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24952)'
                                .')'
                                .'|o(?'
                                    .'|cale(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25027)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25103)'
                                    .')'
                                    .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25175)'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ai(?'
                                    .'|l\\-(?'
                                        .'|header\\-footer(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25272)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25348)'
                                        .')'
                                        .'|template(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25423)'
                                            .'|\\-(?'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25496)'
                                                .'|t(?'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25573)'
                                                    .'|ype(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25642)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25718)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25797)'
                                .')'
                                .'|edia(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25868)'
                                    .'|\\-(?'
                                        .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25951)'
                                        .'|folder(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26023)'
                                            .'|\\-configuration(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26104)'
                                                .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26191)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26262)'
                                            .'|humbnail(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26336)'
                                                .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26405)'
                                            .')'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26479)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n(?'
                                .'|ewsletter\\-recipient(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26573)'
                                    .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26641)'
                                .')'
                                .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26716)'
                                .'|umber\\-range(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26794)'
                                    .'|\\-(?'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26879)'
                                            .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26946)'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27024)'
                                            .'|ype(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27093)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27169)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27245)'
                                .'|\\-(?'
                                    .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27320)'
                                    .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27391)'
                                    .'|delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27462)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|d(?'
                        .'|elivery\\-time(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:27565)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:27632)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:27728)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:27795)'
                                .')'
                            .')'
                        .')'
                        .'|ocument(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:27887)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:27954)'
                            .')'
                            .'|\\-(?'
                                .'|base\\-config(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:28054)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:28121)'
                                    .')'
                                    .'|\\-sales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:28220)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:28287)'
                                        .')'
                                    .')'
                                .')'
                                .'|type(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:28376)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:28443)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:28539)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:28606)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|flow(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:28698)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                            .'|(*:28765)'
                        .')'
                        .'|\\-(?'
                            .'|sequence(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:28861)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:28928)'
                                .')'
                            .')'
                            .'|template(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:29020)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:29087)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export\\-(?'
                            .'|file(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:29199)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:29266)'
                                .')'
                            .')'
                            .'|log(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:29353)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:29420)'
                                .')'
                            .')'
                            .'|profile(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:29511)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:29578)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:29674)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:29741)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ntegration(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:29837)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29901)'
                            .'|\\-role(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:29989)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:30056)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|l(?'
                        .'|an(?'
                            .'|ding\\-page(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:30161)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:30228)'
                                .')'
                                .'|\\-(?'
                                    .'|sales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:30330)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:30397)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:30487)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:30554)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:30648)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:30715)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|guage(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:30807)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:30874)'
                                .')'
                            .')'
                        .')'
                        .'|o(?'
                            .'|cale(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:30967)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:31034)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:31130)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:31197)'
                                    .')'
                                .')'
                            .')'
                            .'|g\\-entry(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:31290)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:31357)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|m(?'
                        .'|ai(?'
                            .'|l\\-(?'
                                .'|header\\-footer(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:31472)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:31539)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:31635)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:31702)'
                                        .')'
                                    .')'
                                .')'
                                .'|template(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:31795)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:31862)'
                                    .')'
                                    .'|\\-(?'
                                        .'|media(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:31955)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:32022)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:32120)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:32187)'
                                                .')'
                                            .')'
                                            .'|ype(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:32274)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:32341)'
                                                .')'
                                                .'|\\-translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:32437)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:32504)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n\\-category(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:32604)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:32671)'
                                .')'
                            .')'
                        .')'
                        .'|edia(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:32760)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:32827)'
                            .')'
                            .'|\\-(?'
                                .'|default\\-folder(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:32930)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:32997)'
                                    .')'
                                .')'
                                .'|folder(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:33087)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:33154)'
                                    .')'
                                    .'|\\-configuration(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:33252)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:33319)'
                                        .')'
                                        .'|\\-media\\-thumbnail\\-size(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:33426)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:33493)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ag(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:33585)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:33652)'
                                        .')'
                                    .')'
                                    .'|humbnail(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:33744)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:33811)'
                                        .')'
                                        .'|\\-size(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:33900)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:33967)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:34062)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:34129)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|n(?'
                        .'|ewsletter\\-recipient(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:34241)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:34308)'
                            .')'
                            .'|\\-tag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:34396)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:34463)'
                                .')'
                            .')'
                        .')'
                        .'|otification(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:34559)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:34626)'
                            .')'
                        .')'
                        .'|umber\\-range(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:34722)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:34789)'
                            .')'
                            .'|\\-(?'
                                .'|s(?'
                                    .'|ales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:34894)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:34961)'
                                        .')'
                                    .')'
                                    .'|tate(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:35049)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:35116)'
                                        .')'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:35215)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:35282)'
                                        .')'
                                    .')'
                                    .'|ype(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:35369)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:35436)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:35532)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:35599)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|order(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:35693)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                            .'|(*:35760)'
                        .')'
                        .'|\\-(?'
                            .'|address(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:35855)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:35922)'
                                .')'
                            .')'
                            .'|customer(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:36014)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:36081)'
                                .')'
                            .')'
                            .'|delivery(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:36173)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:36240)'
                                .')'
                                .'|\\-position(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:36333)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36397)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
        36397 => '{^(?'
                .'|/api/(?'
                    .'|search(?'
                        .'|/(?'
                            .'|order\\-(?'
                                .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36506)'
                                .'|line\\-item(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36582)'
                                    .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36655)'
                                .')'
                                .'|t(?'
                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36725)'
                                    .'|ransaction(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36801)'
                                        .'|\\-capture(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36876)'
                                            .'|\\-refund(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36950)'
                                                .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37023)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37112)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37188)'
                                .')'
                                .'|lugin(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37260)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37336)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37412)'
                                        .'|\\-(?'
                                            .'|c(?'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37494)'
                                                    .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37563)'
                                                .')'
                                                .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37647)'
                                                .'|ross\\-selling(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37726)'
                                                    .'|\\-(?'
                                                        .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37812)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37886)'
                                                    .')'
                                                .')'
                                                .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37968)'
                                            .')'
                                            .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38040)'
                                            .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38109)'
                                            .'|feature\\-set(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38187)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38263)'
                                            .')'
                                            .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38346)'
                                            .'|m(?'
                                                .'|anufacturer(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38427)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38503)'
                                                .')'
                                                .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38571)'
                                            .')'
                                            .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38641)'
                                            .'|pr(?'
                                                .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38712)'
                                                .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38781)'
                                            .')'
                                            .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38851)'
                                            .'|s(?'
                                                .'|earch\\-(?'
                                                    .'|config(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38937)'
                                                        .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39007)'
                                                    .')'
                                                    .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39078)'
                                                .')'
                                                .'|orting(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39151)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39227)'
                                                .')'
                                                .'|tream(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39299)'
                                                    .'|\\-(?'
                                                        .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39373)'
                                                        .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39443)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39517)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39589)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39662)'
                                            .')'
                                            .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39736)'
                                        .')'
                                    .')'
                                    .'|motion(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39810)'
                                        .'|\\-(?'
                                            .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39888)'
                                            .'|discount(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39962)'
                                                .'|\\-(?'
                                                    .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40036)'
                                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40103)'
                                                .')'
                                            .')'
                                            .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40184)'
                                            .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40258)'
                                            .'|persona\\-(?'
                                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40341)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40408)'
                                            .')'
                                            .'|s(?'
                                                .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40489)'
                                                .'|etgroup(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40562)'
                                                    .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40631)'
                                                .')'
                                            .')'
                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40707)'
                                        .')'
                                    .')'
                                    .'|perty\\-group(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40787)'
                                        .'|\\-option(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40861)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40937)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|\\-ids/(?'
                            .'|order\\-(?'
                                .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41042)'
                                .'|line\\-item(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41118)'
                                    .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41191)'
                                .')'
                                .'|t(?'
                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41261)'
                                    .'|ransaction(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41337)'
                                        .'|\\-capture(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41412)'
                                            .'|\\-refund(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41486)'
                                                .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41559)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41648)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41724)'
                                .')'
                                .'|lugin(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41796)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41872)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41948)'
                                        .'|\\-(?'
                                            .'|c(?'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42030)'
                                                    .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42099)'
                                                .')'
                                                .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42183)'
                                                .'|ross\\-selling(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42262)'
                                                    .'|\\-(?'
                                                        .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42348)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42422)'
                                                    .')'
                                                .')'
                                                .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42504)'
                                            .')'
                                            .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42576)'
                                            .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42645)'
                                            .'|feature\\-set(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42723)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42799)'
                                            .')'
                                            .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42882)'
                                            .'|m(?'
                                                .'|anufacturer(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42963)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43039)'
                                                .')'
                                                .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43107)'
                                            .')'
                                            .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43177)'
                                            .'|pr(?'
                                                .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43248)'
                                                .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43317)'
                                            .')'
                                            .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43387)'
                                            .'|s(?'
                                                .'|earch\\-(?'
                                                    .'|config(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43473)'
                                                        .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43543)'
                                                    .')'
                                                    .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43614)'
                                                .')'
                                                .'|orting(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43687)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43763)'
                                                .')'
                                                .'|tream(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43835)'
                                                    .'|\\-(?'
                                                        .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43909)'
                                                        .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43979)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44053)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44125)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44198)'
                                            .')'
                                            .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44272)'
                                        .')'
                                    .')'
                                    .'|motion(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44346)'
                                        .'|\\-(?'
                                            .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44424)'
                                            .'|discount(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44498)'
                                                .'|\\-(?'
                                                    .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44572)'
                                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44639)'
                                                .')'
                                            .')'
                                            .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44720)'
                                            .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44794)'
                                            .'|persona\\-(?'
                                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44877)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44944)'
                                            .')'
                                            .'|s(?'
                                                .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45025)'
                                                .'|etgroup(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45098)'
                                                    .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45167)'
                                                .')'
                                            .')'
                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45243)'
                                        .')'
                                    .')'
                                    .'|perty\\-group(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45323)'
                                        .'|\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45394)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|order\\-(?'
                        .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45490)'
                        .'|line\\-item(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:45582)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:45649)'
                            .')'
                            .'|\\-download(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:45742)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:45809)'
                                .')'
                            .')'
                        .')'
                        .'|t(?'
                            .'|ag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:45900)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:45967)'
                                .')'
                            .')'
                            .'|ransaction(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:46061)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:46128)'
                                .')'
                                .'|\\-capture(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:46220)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:46287)'
                                    .')'
                                    .'|\\-refund(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:46378)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:46445)'
                                        .')'
                                        .'|\\-position(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:46538)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:46605)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|p(?'
                        .'|ayment\\-method(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:46712)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:46779)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:46875)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:46942)'
                                .')'
                            .')'
                        .')'
                        .'|lugin(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:47032)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:47099)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:47195)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:47262)'
                                .')'
                            .')'
                        .')'
                        .'|ro(?'
                            .'|duct(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:47356)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:47423)'
                                .')'
                                .'|\\-(?'
                                    .'|c(?'
                                        .'|ategory(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:47522)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:47589)'
                                            .')'
                                            .'|\\-tree(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:47678)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:47745)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|onfigurator\\-setting(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:47850)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:47917)'
                                            .')'
                                        .')'
                                        .'|ross\\-selling(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:48014)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:48081)'
                                            .')'
                                            .'|\\-(?'
                                                .'|assigned\\-products(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:48187)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:48254)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:48349)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:48416)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ustom\\-field\\-set(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:48519)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:48586)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|download(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:48679)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:48746)'
                                        .')'
                                    .')'
                                    .'|export(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:48836)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:48903)'
                                        .')'
                                    .')'
                                    .'|feature\\-set(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:48999)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:49066)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:49162)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:49229)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|keyword\\-dictionary(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:49333)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:49400)'
                                        .')'
                                    .')'
                                    .'|m(?'
                                        .'|anufacturer(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:49499)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:49566)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:49662)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:49729)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|edia(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:49818)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:49885)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|option(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:49976)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:50043)'
                                        .')'
                                    .')'
                                    .'|pr(?'
                                        .'|ice(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:50135)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:50202)'
                                            .')'
                                        .')'
                                        .'|operty(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:50292)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:50359)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|review(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:50450)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:50517)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|earch\\-(?'
                                            .'|config(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:50621)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:50688)'
                                                .')'
                                                .'|\\-field(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:50778)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:50845)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|keyword(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:50937)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:51004)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|orting(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:51095)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:51162)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:51258)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:51325)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|tream(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:51415)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:51482)'
                                            .')'
                                            .'|\\-(?'
                                                .'|filter(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:51576)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:51643)'
                                                    .')'
                                                .')'
                                                .'|mapping(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:51734)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:51801)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:51896)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:51963)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:52056)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:52123)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:52217)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:52284)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|visibility(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:52379)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:52446)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|motion(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:52538)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:52605)'
                                .')'
                                .'|\\-(?'
                                    .'|cart\\-rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:52703)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:52770)'
                                        .')'
                                    .')'
                                    .'|discount(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:52862)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:52929)'
                                        .')'
                                        .'|\\-(?'
                                            .'|prices(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:53023)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:53090)'
                                                .')'
                                            .')'
                                            .'|rule(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:53178)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:53245)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|individual\\-code(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:53347)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:53414)'
                                        .')'
                                    .')'
                                    .'|order\\-rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:53509)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:53576)'
                                        .')'
                                    .')'
                                    .'|persona\\-(?'
                                        .'|customer(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:53680)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:53747)'
                                            .')'
                                        .')'
                                        .'|rule(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:53835)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:53902)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|ales\\-channel(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:54004)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:54071)'
                                            .')'
                                        .')'
                                        .'|etgroup(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:54162)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:54229)'
                                            .')'
                                            .'|\\-rule(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:54318)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:54385)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:54482)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:54549)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|perty\\-group(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:54647)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:54714)'
                                .')'
                                .'|\\-option(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:54805)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:54872)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:54968)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55032)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
        55032 => '{^(?'
                .'|/api/(?'
                    .'|s(?'
                        .'|e(?'
                            .'|arch(?'
                                .'|\\-ids/(?'
                                    .'|property\\-group\\-(?'
                                        .'|option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55163)'
                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55237)'
                                    .')'
                                    .'|rule(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55308)'
                                        .'|\\-(?'
                                            .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55385)'
                                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55451)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|al(?'
                                            .'|es\\-channel(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55539)'
                                                .'|\\-(?'
                                                    .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55616)'
                                                    .'|c(?'
                                                        .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55689)'
                                                        .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55759)'
                                                    .')'
                                                    .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55829)'
                                                    .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55900)'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55978)'
                                                    .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56057)'
                                                    .'|t(?'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56134)'
                                                        .'|ype(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56203)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56279)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|utation(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56356)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56432)'
                                            .')'
                                        .')'
                                        .'|c(?'
                                            .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56514)'
                                            .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56581)'
                                        .')'
                                        .'|eo\\-url(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56655)'
                                            .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56728)'
                                        .')'
                                        .'|hipping\\-method(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56810)'
                                            .'|\\-(?'
                                                .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56883)'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56952)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57025)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|nippet(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57100)'
                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57168)'
                                        .')'
                                        .'|tate\\-machine(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57248)'
                                            .'|\\-(?'
                                                .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57323)'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57394)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57470)'
                                                .')'
                                                .'|trans(?'
                                                    .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57547)'
                                                    .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57616)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57695)'
                                    .')'
                                    .'|t(?'
                                        .'|a(?'
                                            .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57768)'
                                            .'|x(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57835)'
                                                .'|\\-(?'
                                                    .'|provider(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57914)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57990)'
                                                    .')'
                                                    .'|rule(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58061)'
                                                        .'|\\-type(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58133)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58209)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|heme(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58284)'
                                            .'|\\-(?'
                                                .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58357)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58425)'
                                                .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58502)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58576)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|nit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58652)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58728)'
                                        .')'
                                        .'|ser(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58798)'
                                            .'|\\-(?'
                                                .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58877)'
                                                .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58946)'
                                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59017)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|version(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59093)'
                                        .'|\\-commit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59167)'
                                            .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59236)'
                                        .')'
                                    .')'
                                    .'|webhook(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59311)'
                                        .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59386)'
                                    .')'
                                .')'
                                .'|/(?'
                                    .'|property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59483)'
                                    .'|rule(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59553)'
                                        .'|\\-(?'
                                            .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59630)'
                                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59696)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|al(?'
                                            .'|es\\-channel(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59784)'
                                                .'|\\-(?'
                                                    .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59861)'
                                                    .'|c(?'
                                                        .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59934)'
                                                        .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60004)'
                                                    .')'
                                                    .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60074)'
                                                    .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60145)'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60223)'
                                                    .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60302)'
                                                    .'|t(?'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60379)'
                                                        .'|ype(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60448)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60524)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|utation(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60601)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60677)'
                                            .')'
                                        .')'
                                        .'|c(?'
                                            .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60759)'
                                            .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60826)'
                                        .')'
                                        .'|eo\\-url(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60900)'
                                            .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60973)'
                                        .')'
                                        .'|hipping\\-method(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61055)'
                                            .'|\\-(?'
                                                .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61128)'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61197)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61270)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|nippet(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61345)'
                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61413)'
                                        .')'
                                        .'|tate\\-machine(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61493)'
                                            .'|\\-(?'
                                                .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61568)'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61639)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61715)'
                                                .')'
                                                .'|trans(?'
                                                    .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61792)'
                                                    .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61861)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61940)'
                                    .')'
                                    .'|t(?'
                                        .'|a(?'
                                            .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62013)'
                                            .'|x(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62080)'
                                                .'|\\-(?'
                                                    .'|provider(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62159)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62235)'
                                                    .')'
                                                    .'|rule(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62306)'
                                                        .'|\\-type(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62378)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62454)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|heme(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62529)'
                                            .'|\\-(?'
                                                .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62602)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62670)'
                                                .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62747)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62821)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|nit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62897)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62973)'
                                        .')'
                                        .'|ser(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63043)'
                                            .'|\\-(?'
                                                .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63122)'
                                                .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63191)'
                                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63262)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|version(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63338)'
                                        .'|\\-commit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63412)'
                                            .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63481)'
                                        .')'
                                    .')'
                                    .'|webhook(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63556)'
                                        .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63631)'
                                    .')'
                                .')'
                            .')'
                            .'|o\\-url(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:63722)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:63789)'
                                .')'
                                .'|\\-template(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:63882)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:63949)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|al(?'
                            .'|es\\-channel(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:64051)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:64118)'
                                .')'
                                .'|\\-(?'
                                    .'|analytics(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64215)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64282)'
                                        .')'
                                    .')'
                                    .'|c(?'
                                        .'|ountry(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:64376)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:64443)'
                                            .')'
                                        .')'
                                        .'|urrency(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:64534)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:64601)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|domain(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64692)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64759)'
                                        .')'
                                    .')'
                                    .'|language(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64851)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64918)'
                                        .')'
                                    .')'
                                    .'|payment\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:65017)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:65084)'
                                        .')'
                                    .')'
                                    .'|shipping\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:65184)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:65251)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65349)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65416)'
                                            .')'
                                        .')'
                                        .'|ype(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65503)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65570)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:65666)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:65733)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|utation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:65828)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:65895)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:65991)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:66058)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|c(?'
                            .'|heduled\\-task(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:66161)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:66228)'
                                .')'
                            .')'
                            .'|ript(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:66316)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:66383)'
                                .')'
                            .')'
                        .')'
                        .'|hipping\\-method(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:66483)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:66550)'
                            .')'
                            .'|\\-(?'
                                .'|price(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:66643)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:66710)'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ag(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:66800)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:66867)'
                                        .')'
                                    .')'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:66961)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:67028)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|nippet(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:67121)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:67188)'
                            .')'
                            .'|\\-set(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:67276)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:67343)'
                                .')'
                            .')'
                        .')'
                        .'|tate\\-machine(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:67441)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:67508)'
                            .')'
                            .'|\\-(?'
                                .'|history(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:67603)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:67670)'
                                    .')'
                                .')'
                                .'|state(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:67759)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:67826)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:67922)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:67989)'
                                        .')'
                                    .')'
                                .')'
                                .'|trans(?'
                                    .'|ition(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68087)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68154)'
                                        .')'
                                    .')'
                                    .'|lation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68244)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68311)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ystem\\-config(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:68411)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:68478)'
                            .')'
                        .')'
                    .')'
                    .'|property\\-group\\-(?'
                        .'|option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68583)'
                        .'|translation(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:68676)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:68743)'
                            .')'
                        .')'
                    .')'
                    .'|rule(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:68832)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                            .'|(*:68899)'
                        .')'
                        .'|\\-(?'
                            .'|condition(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:68996)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:69063)'
                                .')'
                            .')'
                            .'|tag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:69150)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:69217)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|t(?'
                        .'|a(?'
                            .'|g(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:69312)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:69379)'
                                .')'
                            .')'
                            .'|x(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:69464)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:69531)'
                                .')'
                                .'|\\-(?'
                                    .'|provider(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:69627)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:69694)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69790)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69857)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:69946)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:70013)'
                                        .')'
                                        .'|\\-type(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:70102)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:70169)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:70265)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:70332)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|heme(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:70425)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:70492)'
                            .')'
                            .'|\\-(?'
                                .'|child(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:70585)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:70652)'
                                    .')'
                                .')'
                                .'|media(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:70741)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:70808)'
                                    .')'
                                .')'
                                .'|sales\\-channel(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:70906)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:70973)'
                                    .')'
                                .')'
                                .'|translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:71068)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:71135)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|u(?'
                        .'|nit(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:71229)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:71296)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:71392)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:71459)'
                                .')'
                            .')'
                        .')'
                        .'|ser(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:71544)'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71607)'
                            .'|\\-(?'
                                .'|access\\-key(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:71705)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:71772)'
                                    .')'
                                .')'
                                .'|config(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:71862)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:71929)'
                                    .')'
                                .')'
                                .'|recovery(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:72021)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:72088)'
                                    .')'
                                .')'
                            .')'
                            .'|/([^/]++)(?'
                                .'|(*:72113)'
                                .'|/ac(?'
                                    .'|cess\\-keys/([^/]++)(*:72148)'
                                    .'|l\\-roles/([^/]++)(*:72175)'
                                .')'
                                .'|(*:72186)'
                            .')'
                            .'|(*:72197)'
                        .')'
                    .')'
                    .'|version(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:72288)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                            .'|(*:72355)'
                        .')'
                        .'|\\-commit(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:72446)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:72513)'
                            .')'
                            .'|\\-data(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:72602)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:72669)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|webhook(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:72762)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                            .'|(*:72829)'
                        .')'
                        .'|\\-event\\-log(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:72924)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:72991)'
                            .')'
                        .')'
                    .')'
                    .'|acl\\-role(?'
                        .'|(*:73016)'
                        .'|/([^/]++)(?'
                            .'|(*:73038)'
                        .')'
                    .')'
                    .'|integration(?'
                        .'|(*:73064)'
                        .'|/([^/]++)(*:73083)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        61 => [[['_route' => 'api.action.indexing.iterate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IndexingController::iterate'], ['indexer'], ['POST' => 0], null, false, true, null]],
        87 => [
            [['_route' => 'api.increment.increment', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Increment\\Controller\\IncrementApiController::increment'], ['pool'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api.increment.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Increment\\Controller\\IncrementApiController::getIncrement'], ['pool'], ['GET' => 0], null, false, true, null],
        ],
        141 => [[['_route' => 'api.action.import_export.file.prepare-download', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::prepareDownload'], ['fileId'], ['POST' => 0], null, false, true, null]],
        183 => [[['_route' => 'api.extension.download', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::downloadExtension'], ['technicalName'], ['POST' => 0], null, false, true, null]],
        218 => [[['_route' => 'api.extension.deactivate', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::deactivateExtension'], ['type', 'technicalName'], ['PUT' => 0], null, false, true, null]],
        252 => [[['_route' => 'api.extension.install', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::installExtension'], ['type', 'technicalName'], ['POST' => 0], null, false, true, null]],
        290 => [[['_route' => 'api.extension.uninstall', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::uninstallExtension'], ['type', 'technicalName'], ['POST' => 0], null, false, true, null]],
        321 => [[['_route' => 'api.extension.update', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::updateExtension'], ['type', 'technicalName'], ['POST' => 0], null, false, true, null]],
        354 => [[['_route' => 'api.extension.remove', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::removeExtension'], ['type', 'technicalName'], ['DELETE' => 0], null, false, true, null]],
        388 => [[['_route' => 'api.extension.activate', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::activateExtension'], ['type', 'technicalName'], ['PUT' => 0], null, false, true, null]],
        418 => [[['_route' => 'api.increment.decrement', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Increment\\Controller\\IncrementApiController::decrement'], ['pool'], ['POST' => 0], null, false, true, null]],
        454 => [[['_route' => 'api.action.download.document', '_routeScope' => ['api'], '_acl' => ['document:read'], '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        468 => [[['_route' => 'api.action.document.upload', '_routeScope' => ['api'], '_acl' => ['document:update'], '_controller' => 'Shopware\\Core\\Checkout\\Document\\DocumentGeneratorController::uploadToDocument'], ['documentId'], ['POST' => 0], null, false, false, null]],
        503 => [[['_route' => 'api.increment.reset', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Increment\\Controller\\IncrementApiController::reset'], ['pool'], ['POST' => 0], null, false, true, null]],
        544 => [[['_route' => 'api.clone', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::clone'], ['entity', 'id'], ['POST' => 0], null, false, true, null]],
        590 => [[['_route' => 'api.createVersion', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::createVersion'], ['entity', 'id'], ['POST' => 0], null, false, true, null]],
        631 => [[['_route' => 'api.mergeVersion', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::mergeVersion'], ['entity', 'versionId'], ['POST' => 0], null, false, true, null]],
        669 => [[['_route' => 'api.deleteVersion', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::deleteVersion'], ['versionId', 'entity', 'entityId'], ['POST' => 0], null, false, true, null]],
        725 => [[['_route' => 'api.action.number-range.reserve', 'saleschannel' => null, '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\NumberRange\\Api\\NumberRangeController::reserve'], ['type', 'saleschannel'], ['GET' => 0], null, false, true, null]],
        763 => [[['_route' => 'api.action.number-range.preview-pattern', '_routeScope' => ['api'], 'type' => 'default', '_controller' => 'Shopware\\Core\\System\\NumberRange\\Api\\NumberRangeController::previewPattern'], ['type'], ['GET' => 0], null, false, true, null]],
        816 => [[['_route' => 'api.state_machine.states', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\StateMachine\\Api\\StateMachineActionController::getAvailableTransitions'], ['entityName', 'entityId'], ['GET' => 0], null, false, false, null]],
        833 => [[['_route' => 'api.state_machine.transition_state', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\StateMachine\\Api\\StateMachineActionController::transitionState'], ['entityName', 'entityId', 'transition'], ['POST' => 0], null, false, true, null]],
        876 => [[['_route' => 'api.seo-url-template.default', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::getDefaultSeoTemplate'], ['routeName'], ['GET' => 0], null, false, true, null]],
        914 => [[['_route' => 'api.action.product.combinations', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Product\\Api\\ProductActionController::getCombinations'], ['productId'], ['GET' => 0], null, false, false, null]],
        956 => [[['_route' => 'api.action.media-folder.dissolve', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaFolderController::dissolve'], ['folderId'], ['POST' => 0], null, false, false, null]],
        983 => [[['_route' => 'api.action.media.upload', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::upload'], ['mediaId'], ['POST' => 0], null, false, false, null]],
        997 => [[['_route' => 'api.action.media.rename', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::renameMediaFile'], ['mediaId'], ['POST' => 0], null, false, false, null]],
        1033 => [[['_route' => 'api.action.trigger_event', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Flow\\Controller\\TriggerFlowController::trigger'], ['eventName'], ['POST' => 0], null, false, true, null]],
        1075 => [[['_route' => 'api.action.theme.configuration', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::configuration'], ['themeId'], ['GET' => 0], null, false, false, null]],
        1099 => [[['_route' => 'api.action.theme.assign', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::assignTheme'], ['themeId', 'salesChannelId'], ['POST' => 0], null, false, true, null]],
        1113 => [[['_route' => 'api.action.theme.reset', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::resetTheme'], ['themeId'], ['PATCH' => 0], null, false, false, null]],
        1140 => [[['_route' => 'api.action.theme.structuredFields', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::structuredFields'], ['themeId'], ['GET' => 0], null, false, false, null]],
        1150 => [[['_route' => 'api.action.theme.update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::updateTheme'], ['themeId'], ['PATCH' => 0], null, false, true, null]],
        1205 => [[['_route' => 'api.action.order.convert-to-cart', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderConverterController::convertToCart'], ['orderId'], ['POST' => 0], null, true, false, null]],
        1223 => [[['_route' => 'api.action.order.add-credit-item', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addCreditItemToOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1244 => [[['_route' => 'api.action.order.recalculate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::recalculateOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1272 => [[['_route' => 'api.action.order.add-product', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addProductToOrder'], ['orderId', 'productId'], ['POST' => 0], null, false, true, null]],
        1293 => [[['_route' => 'api.action.order.add-promotion-item', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addPromotionItemToOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1311 => [[['_route' => 'api.action.order.add-line-item', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addCustomLineItemToOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1345 => [[['_route' => 'api.action.order.toggle-automatic-promotions', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::toggleAutomaticPromotions'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1388 => [[['_route' => 'api.action.document.preview', '_routeScope' => ['api'], '_acl' => ['document:read'], '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::previewDocument'], ['orderId', 'deepLinkCode', 'documentTypeName'], ['GET' => 0], null, false, false, null]],
        1422 => [[['_route' => 'api.action.document.bulk.create', '_routeScope' => ['api'], '_acl' => ['document:create'], '_controller' => 'Shopware\\Core\\Checkout\\Document\\DocumentGeneratorController::createDocuments'], ['documentTypeName'], ['POST' => 0], null, false, false, null]],
        1454 => [[['_route' => 'api.action.order.state_machine.order.transition_state', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderStateTransition'], ['orderId', 'transition'], ['POST' => 0], null, false, true, null]],
        1509 => [[['_route' => 'api.action.order.replace-order-address', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::replaceOrderAddressWithCustomerAddress'], ['orderAddressId', 'customerAddressId'], ['POST' => 0], null, false, true, null]],
        1560 => [[['_route' => 'api.action.order.state_machine.order_transaction.transition_state', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderTransactionStateTransition'], ['orderTransactionId', 'transition'], ['POST' => 0], null, false, true, null]],
        1593 => [[['_route' => 'api.action.order.order_transaction_capture_refund', '_routeScope' => ['api'], '_acl' => ['order_refund.editor'], '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::refundOrderTransactionCapture'], ['refundId'], ['POST' => 0], null, false, true, null]],
        1635 => [[['_route' => 'api.action.order.state_machine.order_delivery.transition_state', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderDeliveryStateTransition'], ['orderDeliveryId', 'transition'], ['POST' => 0], null, false, true, null]],
        1688 => [[['_route' => 'api.admin.product-stream-preview', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\AdminProductStreamController::productStreamPreview'], ['salesChannelId'], ['POST' => 0], null, false, true, null]],
        1729 => [[['_route' => 'api.admin.dashboard.order-amount', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\DashboardController::orderAmount'], ['since'], ['GET' => 0], null, false, true, null]],
        1773 => [[['_route' => 'api.proxy.store-api', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::proxy'], ['salesChannelId', '_path'], null, null, false, true, null]],
        1798 => [[['_route' => 'api.proxy-order.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::proxyCreateOrder'], ['salesChannelId'], null, null, false, true, null]],
        1835 => [[['_route' => 'api.license.cancel', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreLicensesController::cancelSubscription'], ['licenseId'], ['DELETE' => 0], null, false, true, null]],
        1857 => [[['_route' => 'api.license.rate', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreLicensesController::rateLicensedExtension'], ['extensionId'], ['POST' => 0], null, false, true, null]],
        1920 => [[['_route' => 'api.app_system.action_buttons', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::getActionsPerView'], ['entity', 'view'], ['GET' => 0], null, false, true, null]],
        1941 => [[['_route' => 'api.app_system.action_button.run', '_routeScope' => ['api'], '_acl' => ['app'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::runAction'], ['id'], ['POST' => 0], null, false, true, null]],
        2020 => [
            [['_route' => 'api.app.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        2086 => [
            [['_route' => 'api.app.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        2190 => [
            [['_route' => 'api.app_action_button.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        2256 => [
            [['_route' => 'api.app_action_button.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        2351 => [
            [['_route' => 'api.app_action_button_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        2417 => [
            [['_route' => 'api.app_action_button_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        2523 => [
            [['_route' => 'api.app_administration_snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_administration_snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_administration_snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        2589 => [
            [['_route' => 'api.app_administration_snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_administration_snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        2683 => [
            [['_route' => 'api.app_cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        2749 => [
            [['_route' => 'api.app_cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        2844 => [
            [['_route' => 'api.app_cms_block_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        2910 => [
            [['_route' => 'api.app_cms_block_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3009 => [
            [['_route' => 'api.app_flow_action.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_action.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_action.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3075 => [
            [['_route' => 'api.app_flow_action.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_action.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3170 => [
            [['_route' => 'api.app_flow_action_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_action_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_action_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3236 => [
            [['_route' => 'api.app_flow_action_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_action_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3325 => [
            [['_route' => 'api.app_flow_event.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_event.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_event.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3391 => [
            [['_route' => 'api.app_flow_event.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_event.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3490 => [
            [['_route' => 'api.app_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3556 => [
            [['_route' => 'api.app_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3659 => [
            [['_route' => 'api.app_script_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_script_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_script_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3725 => [
            [['_route' => 'api.app_script_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_script_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3820 => [
            [['_route' => 'api.app_script_condition_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_script_condition_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_script_condition_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3886 => [
            [['_route' => 'api.app_script_condition_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_script_condition_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3985 => [
            [['_route' => 'api.app_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        4051 => [
            [['_route' => 'api.app_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        4146 => [
            [['_route' => 'api.app_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        4212 => [
            [['_route' => 'api.app_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        4305 => [
            [['_route' => 'api.app_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        4371 => [
            [['_route' => 'api.app_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        4465 => [[['_route' => 'api.acl_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        4527 => [[['_route' => 'api.acl_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        4619 => [
            [['_route' => 'api.acl_user_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        4685 => [
            [['_route' => 'api.acl_user_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        4712 => [[['_route' => 'api.script_endpoint', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Script\\Api\\ScriptApiRoute::execute'], ['hook'], ['POST' => 0], null, false, true, null]],
        4829 => [[['_route' => 'api.custom_entity_entity.search-ids', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::searchIds'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        4891 => [[['_route' => 'api.custom_entity.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        4962 => [[['_route' => 'api.custom_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5032 => [[['_route' => 'api.custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5104 => [[['_route' => 'api.custom_field_set_relation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5174 => [[['_route' => 'api.customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5248 => [[['_route' => 'api.customer_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5318 => [[['_route' => 'api.customer_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5411 => [[['_route' => 'api.customer_group_registration_sales_channels.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5486 => [[['_route' => 'api.currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5570 => [[['_route' => 'api.currency_country_rounding.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5643 => [[['_route' => 'api.currency_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5718 => [[['_route' => 'api.ce_entity.search-ids', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::searchIdsShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        5790 => [[['_route' => 'api.category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5860 => [[['_route' => 'api.category_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5932 => [[['_route' => 'api.category_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6008 => [[['_route' => 'api.cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6077 => [[['_route' => 'api.cms_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6152 => [[['_route' => 'api.cms_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6225 => [[['_route' => 'api.cms_section.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6293 => [[['_route' => 'api.cms_slot.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6368 => [[['_route' => 'api.cms_slot_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6442 => [[['_route' => 'api.country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6517 => [[['_route' => 'api.country_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6592 => [[['_route' => 'api.country_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6666 => [[['_route' => 'api.country_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6746 => [[['_route' => 'api.acl_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6818 => [[['_route' => 'api.acl_user_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6886 => [[['_route' => 'api.app.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6973 => [[['_route' => 'api.app_action_button.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7048 => [[['_route' => 'api.app_action_button_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7133 => [[['_route' => 'api.app_administration_snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7209 => [[['_route' => 'api.app_cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7284 => [[['_route' => 'api.app_cms_block_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7365 => [[['_route' => 'api.app_flow_action.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7440 => [[['_route' => 'api.app_flow_action_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7508 => [[['_route' => 'api.app_flow_event.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7586 => [[['_route' => 'api.app_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7671 => [[['_route' => 'api.app_script_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7746 => [[['_route' => 'api.app_script_condition_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7824 => [[['_route' => 'api.app_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7898 => [[['_route' => 'api.app_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7970 => [[['_route' => 'api.app_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8079 => [[['_route' => 'api.custom_entity_entity.search', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::search'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        8141 => [[['_route' => 'api.custom_entity.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8212 => [[['_route' => 'api.custom_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8282 => [[['_route' => 'api.custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8354 => [[['_route' => 'api.custom_field_set_relation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8424 => [[['_route' => 'api.customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8498 => [[['_route' => 'api.customer_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8568 => [[['_route' => 'api.customer_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8661 => [[['_route' => 'api.customer_group_registration_sales_channels.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8736 => [[['_route' => 'api.currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8820 => [[['_route' => 'api.currency_country_rounding.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8893 => [[['_route' => 'api.currency_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8968 => [[['_route' => 'api.ce_entity.search', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::searchShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        9040 => [[['_route' => 'api.category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9110 => [[['_route' => 'api.category_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9182 => [[['_route' => 'api.category_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9258 => [[['_route' => 'api.cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9327 => [[['_route' => 'api.cms_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9402 => [[['_route' => 'api.cms_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9475 => [[['_route' => 'api.cms_section.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9543 => [[['_route' => 'api.cms_slot.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9618 => [[['_route' => 'api.cms_slot_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9692 => [[['_route' => 'api.country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9767 => [[['_route' => 'api.country_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9842 => [[['_route' => 'api.country_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9916 => [[['_route' => 'api.country_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9996 => [[['_route' => 'api.acl_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10068 => [[['_route' => 'api.acl_user_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10137 => [[['_route' => 'api.app.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10225 => [[['_route' => 'api.app_action_button.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10301 => [[['_route' => 'api.app_action_button_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10387 => [[['_route' => 'api.app_administration_snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10464 => [[['_route' => 'api.app_cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10540 => [[['_route' => 'api.app_cms_block_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10622 => [[['_route' => 'api.app_flow_action.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10698 => [[['_route' => 'api.app_flow_action_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10767 => [[['_route' => 'api.app_flow_event.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10846 => [[['_route' => 'api.app_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10932 => [[['_route' => 'api.app_script_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11008 => [[['_route' => 'api.app_script_condition_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11087 => [[['_route' => 'api.app_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11162 => [[['_route' => 'api.app_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11235 => [[['_route' => 'api.app_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11360 => [[['_route' => 'api.custom_entity_entity.detail', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::detail'], ['entityName', 'path'], ['GET' => 0], null, false, true, null]],
        11433 => [
            [['_route' => 'api.custom_entity_entity.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::list'], ['entityName', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity_entity.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::create'], ['entityName', 'path'], ['POST' => 0], null, false, true, null],
        ],
        11521 => [
            [['_route' => 'api.custom_entity_entity.update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::update'], ['entityName', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity_entity.delete', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::delete'], ['entityName', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        11602 => [
            [['_route' => 'api.custom_entity.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        11669 => [
            [['_route' => 'api.custom_entity.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        11758 => [
            [['_route' => 'api.custom_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        11825 => [
            [['_route' => 'api.custom_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        11913 => [
            [['_route' => 'api.custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        11980 => [
            [['_route' => 'api.custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12073 => [
            [['_route' => 'api.custom_field_set_relation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        12140 => [
            [['_route' => 'api.custom_field_set_relation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12229 => [
            [['_route' => 'api.customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        12296 => [
            [['_route' => 'api.customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12391 => [
            [['_route' => 'api.customer_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        12458 => [
            [['_route' => 'api.customer_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12547 => [
            [['_route' => 'api.customer_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        12614 => [
            [['_route' => 'api.customer_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12731 => [
            [['_route' => 'api.customer_group_registration_sales_channels.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        12798 => [
            [['_route' => 'api.customer_group_registration_sales_channels.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12887 => [[['_route' => 'api.customer_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        12980 => [
            [['_route' => 'api.currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        13047 => [
            [['_route' => 'api.currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        13152 => [
            [['_route' => 'api.currency_country_rounding.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        13219 => [
            [['_route' => 'api.currency_country_rounding.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        13314 => [
            [['_route' => 'api.currency_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        13381 => [
            [['_route' => 'api.currency_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        13476 => [[['_route' => 'api.ce_entity.detail', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::detailShorthand'], ['entityName', 'path'], ['GET' => 0], null, false, true, null]],
        13549 => [
            [['_route' => 'api.ce_entity.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::listShorthand'], ['entityName', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.ce_entity.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::createShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null],
        ],
        13637 => [
            [['_route' => 'api.ce_entity.update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::updateShorthand'], ['entityName', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.ce_entity.delete', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::deleteShorthand'], ['entityName', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        13728 => [
            [['_route' => 'api.category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        13795 => [
            [['_route' => 'api.category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        13886 => [
            [['_route' => 'api.category_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        13953 => [
            [['_route' => 'api.category_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        14047 => [
            [['_route' => 'api.category_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14114 => [
            [['_route' => 'api.category_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        14212 => [
            [['_route' => 'api.cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14279 => [
            [['_route' => 'api.cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        14367 => [
            [['_route' => 'api.cms_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14434 => [
            [['_route' => 'api.cms_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        14530 => [
            [['_route' => 'api.cms_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14597 => [
            [['_route' => 'api.cms_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        14692 => [
            [['_route' => 'api.cms_section.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14759 => [
            [['_route' => 'api.cms_section.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        14846 => [
            [['_route' => 'api.cms_slot.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14913 => [
            [['_route' => 'api.cms_slot.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        15009 => [
            [['_route' => 'api.cms_slot_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        15076 => [
            [['_route' => 'api.cms_slot_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        15169 => [
            [['_route' => 'api.country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        15236 => [
            [['_route' => 'api.country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        15329 => [
            [['_route' => 'api.country_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        15396 => [
            [['_route' => 'api.country_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        15492 => [
            [['_route' => 'api.country_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        15559 => [
            [['_route' => 'api.country_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        15655 => [
            [['_route' => 'api.country_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        15722 => [
            [['_route' => 'api.country_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        15772 => [[['_route' => 'frontend.app-system.generate-token', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AppController::generateToken'], ['name'], ['POST' => 0], null, false, false, null]],
        15810 => [[['_route' => 'frontend.account.order.single.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderSingleOverview'], ['deepLinkCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        15833 => [[['_route' => 'frontend.account.edit-order.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::editOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        15859 => [[['_route' => 'frontend.account.edit-order.change-payment-method', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderChangePayment'], ['orderId'], ['POST' => 0], null, false, true, null]],
        15884 => [[['_route' => 'frontend.account.edit-order.update-order', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::updateOrder'], ['orderId'], ['POST' => 0], null, false, true, null]],
        15923 => [[['_route' => 'frontend.account.order.single.document', '_routeScope' => ['storefront'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        15957 => [[['_route' => 'frontend.account.order.single.download', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\DownloadController::downloadFile'], ['orderId', 'downloadId'], ['GET' => 0], null, false, true, null]],
        15988 => [[['_route' => 'frontend.account.address.edit.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountEditAddress'], ['addressId'], ['GET' => 0], null, false, true, null]],
        16027 => [[['_route' => 'frontend.account.address.set-default-address', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::switchDefaultAddress'], ['type', 'addressId'], ['POST' => 0], null, false, true, null]],
        16050 => [[['_route' => 'frontend.account.address.delete', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::deleteAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        16067 => [[['_route' => 'frontend.account.address.create', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], [], ['POST' => 0], null, false, false, null]],
        16085 => [[['_route' => 'frontend.account.address.edit.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        16155 => [[['_route' => 'store-api.app-system.generate-token', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppJWTGenerateRoute::generate'], ['name'], ['POST' => 0], null, false, false, null]],
        16207 => [[['_route' => 'store-api.account.set.payment-method', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePaymentMethodRoute::change'], ['paymentMethodId'], ['POST' => 0], null, false, true, null]],
        16236 => [[['_route' => 'store-api.account.address.delete', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteAddressRoute::delete'], ['addressId'], ['DELETE' => 0], null, false, true, null]],
        16275 => [[['_route' => 'store-api.account.address.change.default.shipping', '_routeScope' => ['store-api'], 'type' => 'shipping', '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        16301 => [[['_route' => 'store-api.account.address.change.default.billing', '_routeScope' => ['store-api'], 'type' => 'billing', '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        16320 => [[['_route' => 'store-api.account.address.update', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        16344 => [[['_route' => 'store-api.script_endpoint', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Framework\\Script\\Api\\ScriptStoreApiRoute::execute'], ['hook'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        16380 => [[['_route' => 'store-api.country.state', '_routeScope' => ['store-api'], '_entity' => 'country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryStateRoute::load'], ['countryId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        16406 => [[['_route' => 'store-api.category.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryRoute::load'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        16427 => [[['_route' => 'store-api.cms.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\CmsRoute::load'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        16472 => [[['_route' => 'store-api.customer.wishlist.add', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\AddWishlistProductRoute::add'], ['productId'], ['POST' => 0], null, false, true, null]],
        16497 => [[['_route' => 'store-api.customer.wishlist.delete', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RemoveWishlistProductRoute::delete'], ['productId'], ['DELETE' => 0], null, false, true, null]],
        16545 => [[['_route' => 'store-api.customer-group-registration.config', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerGroupRegistrationSettingsRoute::load'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        16596 => [[['_route' => 'store-api.product.export', '_routeScope' => ['store-api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ProductExport\\SalesChannel\\ExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        16622 => [[['_route' => 'store-api.product.listing', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Listing\\ResolveCriteriaProductListingRoute::load'], ['categoryId'], ['POST' => 0], null, false, true, null]],
        16663 => [[['_route' => 'store-api.product.cross-selling', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\ProductCrossSellingRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        16686 => [[['_route' => 'store-api.product.find-variant', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\FindVariant\\FindProductVariantRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        16706 => [[['_route' => 'store-api.product-review.list', '_routeScope' => ['store-api'], '_entity' => 'product_review', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        16716 => [[['_route' => 'store-api.product-review.save', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewSaveRoute::save'], ['productId'], ['POST' => 0], null, false, false, null]],
        16728 => [[['_route' => 'store-api.product.detail', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Detail\\ProductDetailRoute::load'], ['productId'], ['POST' => 0], null, false, true, null]],
        16768 => [[['_route' => 'store-api.navigation', '_routeScope' => ['store-api'], '_entity' => 'payment_method', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\TreeBuildingNavigationRoute::load'], ['activeId', 'rootId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        16800 => [[['_route' => 'store-api.landing-page.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\LandingPage\\SalesChannel\\LandingPageRoute::load'], ['landingPageId'], ['POST' => 0], null, false, true, null]],
        16842 => [[['_route' => 'store-api.account.order.single.download', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DownloadRoute::load'], ['orderId', 'downloadId'], ['GET' => 0], null, false, true, null]],
        16892 => [[['_route' => 'store-api.document.download', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_entity' => 'document', 'deepLinkCode' => '', '_controller' => 'Shopware\\Core\\Checkout\\Document\\SalesChannel\\DocumentRoute::download'], ['documentId', 'deepLinkCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        16920 => [[['_route' => 'frontend.script_endpoint', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ScriptController::execute'], ['hook'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        16959 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        17013 => [[['_route' => 'widgets.account.order.detail', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::ajaxOrderDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        17043 => [[['_route' => 'frontend.cms.page', '_routeScope' => ['storefront'], 'id' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::page'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        17084 => [[['_route' => 'frontend.cms.navigation.page', '_routeScope' => ['storefront'], 'navigationId' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::category'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        17110 => [[['_route' => 'frontend.cms.navigation.filter', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::filter'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        17143 => [[['_route' => 'frontend.cms.buybox.switch', '_routeScope' => ['storefront'], 'productId' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::switchBuyBoxVariant'], ['productId'], ['GET' => 0], null, false, false, null]],
        17189 => [[['_route' => 'frontend.wishlist.product.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::remove'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        17214 => [[['_route' => 'frontend.wishlist.product.add', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxAdd'], ['productId'], ['POST' => 0], null, false, true, null]],
        17247 => [[['_route' => 'frontend.wishlist.add.after.login', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::addAfterLogin'], ['productId'], ['GET' => 0], null, false, true, null]],
        17273 => [[['_route' => 'frontend.wishlist.product.remove', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxRemove'], ['productId'], ['POST' => 0], null, false, true, null]],
        17327 => [[['_route' => 'frontend.checkout.line-item.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItem'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        17362 => [[['_route' => 'frontend.checkout.line-item.change-quantity', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::changeQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        17410 => [[['_route' => 'frontend.account.customer-group-registration.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::customerGroupRegistration'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        17442 => [[['_route' => 'frontend.landing.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\LandingPageController::index'], ['landingPageId'], ['GET' => 0], null, false, true, null]],
        17484 => [[['_route' => 'frontend.maintenance.singlepage', '_routeScope' => ['storefront'], 'allow_maintenance' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderSinglePage'], ['id'], ['GET' => 0], null, false, true, null]],
        17514 => [[['_route' => 'frontend.navigation.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::index'], ['navigationId'], ['GET' => 0], null, false, true, null]],
        17543 => [[['_route' => 'frontend.detail.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        17560 => [[['_route' => 'frontend.detail.switch', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::switch'], ['productId'], ['GET' => 0], null, false, false, null]],
        17590 => [[['_route' => 'widgets.quickview.minimal', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::quickviewMinimal'], ['productId'], ['GET' => 0], null, false, true, null]],
        17627 => [[['_route' => 'frontend.detail.review.save', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::saveReview'], ['productId'], ['POST' => 0], null, false, false, null]],
        17643 => [[['_route' => 'frontend.product.reviews', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::loadReviews'], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        17761 => [
            [['_route' => 'api.customer_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17828 => [
            [['_route' => 'api.customer_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17920 => [
            [['_route' => 'api.customer_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17987 => [
            [['_route' => 'api.customer_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18074 => [
            [['_route' => 'api.customer_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18141 => [
            [['_route' => 'api.customer_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18233 => [
            [['_route' => 'api.customer_wishlist.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18300 => [
            [['_route' => 'api.customer_wishlist.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18392 => [
            [['_route' => 'api.customer_wishlist_product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18459 => [
            [['_route' => 'api.customer_wishlist_product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18570 => [[['_route' => 'api.customer_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        18641 => [[['_route' => 'api.customer_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        18707 => [[['_route' => 'api.customer_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        18781 => [[['_route' => 'api.customer_wishlist.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        18853 => [[['_route' => 'api.customer_wishlist_product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        18938 => [[['_route' => 'api.delivery_time.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19014 => [[['_route' => 'api.delivery_time_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19088 => [[['_route' => 'api.document.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19171 => [[['_route' => 'api.document_base_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19250 => [[['_route' => 'api.document_base_config_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19321 => [[['_route' => 'api.document_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19397 => [[['_route' => 'api.document_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19471 => [[['_route' => 'api.flow.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19547 => [[['_route' => 'api.flow_sequence.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19618 => [[['_route' => 'api.flow_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19709 => [[['_route' => 'api.import_export_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19775 => [[['_route' => 'api.import_export_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19848 => [[['_route' => 'api.import_export_profile.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        19924 => [[['_route' => 'api.import_export_profile_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20002 => [[['_route' => 'api.integration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20071 => [[['_route' => 'api.integration_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20158 => [[['_route' => 'api.landing_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20240 => [[['_route' => 'api.landing_page_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20309 => [[['_route' => 'api.landing_page_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20382 => [[['_route' => 'api.landing_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20453 => [[['_route' => 'api.language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20528 => [[['_route' => 'api.locale.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20604 => [[['_route' => 'api.locale_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20676 => [[['_route' => 'api.log_entry.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20773 => [[['_route' => 'api.mail_header_footer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20849 => [[['_route' => 'api.mail_header_footer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20924 => [[['_route' => 'api.mail_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        20997 => [[['_route' => 'api.mail_template_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21074 => [[['_route' => 'api.mail_template_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21143 => [[['_route' => 'api.mail_template_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21219 => [[['_route' => 'api.mail_template_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21298 => [[['_route' => 'api.main_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21369 => [[['_route' => 'api.media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21452 => [[['_route' => 'api.media_default_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21524 => [[['_route' => 'api.media_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21605 => [[['_route' => 'api.media_folder_configuration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21692 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21763 => [[['_route' => 'api.media_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21837 => [[['_route' => 'api.media_thumbnail.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21906 => [[['_route' => 'api.media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        21980 => [[['_route' => 'api.media_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22074 => [[['_route' => 'api.newsletter_recipient.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22142 => [[['_route' => 'api.newsletter_recipient_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22217 => [[['_route' => 'api.notification.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22295 => [[['_route' => 'api.number_range.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22380 => [[['_route' => 'api.number_range_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22447 => [[['_route' => 'api.number_range_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22525 => [[['_route' => 'api.number_range_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22594 => [[['_route' => 'api.number_range_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22670 => [[['_route' => 'api.number_range_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22746 => [[['_route' => 'api.order.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22821 => [[['_route' => 'api.order_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22892 => [[['_route' => 'api.order_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        22963 => [[['_route' => 'api.order_delivery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23069 => [[['_route' => 'api.customer_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23140 => [[['_route' => 'api.customer_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23206 => [[['_route' => 'api.customer_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23280 => [[['_route' => 'api.customer_wishlist.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23352 => [[['_route' => 'api.customer_wishlist_product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23437 => [[['_route' => 'api.delivery_time.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23513 => [[['_route' => 'api.delivery_time_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23587 => [[['_route' => 'api.document.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23670 => [[['_route' => 'api.document_base_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23749 => [[['_route' => 'api.document_base_config_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23820 => [[['_route' => 'api.document_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23896 => [[['_route' => 'api.document_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23970 => [[['_route' => 'api.flow.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24046 => [[['_route' => 'api.flow_sequence.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24117 => [[['_route' => 'api.flow_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24208 => [[['_route' => 'api.import_export_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24274 => [[['_route' => 'api.import_export_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24347 => [[['_route' => 'api.import_export_profile.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24423 => [[['_route' => 'api.import_export_profile_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24501 => [[['_route' => 'api.integration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24570 => [[['_route' => 'api.integration_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24657 => [[['_route' => 'api.landing_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24739 => [[['_route' => 'api.landing_page_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24808 => [[['_route' => 'api.landing_page_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24881 => [[['_route' => 'api.landing_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24952 => [[['_route' => 'api.language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25027 => [[['_route' => 'api.locale.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25103 => [[['_route' => 'api.locale_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25175 => [[['_route' => 'api.log_entry.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25272 => [[['_route' => 'api.mail_header_footer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25348 => [[['_route' => 'api.mail_header_footer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25423 => [[['_route' => 'api.mail_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25496 => [[['_route' => 'api.mail_template_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25573 => [[['_route' => 'api.mail_template_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25642 => [[['_route' => 'api.mail_template_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25718 => [[['_route' => 'api.mail_template_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25797 => [[['_route' => 'api.main_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25868 => [[['_route' => 'api.media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25951 => [[['_route' => 'api.media_default_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26023 => [[['_route' => 'api.media_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26104 => [[['_route' => 'api.media_folder_configuration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26191 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26262 => [[['_route' => 'api.media_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26336 => [[['_route' => 'api.media_thumbnail.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26405 => [[['_route' => 'api.media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26479 => [[['_route' => 'api.media_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26573 => [[['_route' => 'api.newsletter_recipient.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26641 => [[['_route' => 'api.newsletter_recipient_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26716 => [[['_route' => 'api.notification.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26794 => [[['_route' => 'api.number_range.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26879 => [[['_route' => 'api.number_range_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26946 => [[['_route' => 'api.number_range_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27024 => [[['_route' => 'api.number_range_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27093 => [[['_route' => 'api.number_range_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27169 => [[['_route' => 'api.number_range_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27245 => [[['_route' => 'api.order.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27320 => [[['_route' => 'api.order_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27391 => [[['_route' => 'api.order_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27462 => [[['_route' => 'api.order_delivery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27565 => [
            [['_route' => 'api.delivery_time.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        27632 => [
            [['_route' => 'api.delivery_time.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        27728 => [
            [['_route' => 'api.delivery_time_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        27795 => [
            [['_route' => 'api.delivery_time_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        27887 => [
            [['_route' => 'api.document.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        27954 => [
            [['_route' => 'api.document.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        28054 => [
            [['_route' => 'api.document_base_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        28121 => [
            [['_route' => 'api.document_base_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        28220 => [
            [['_route' => 'api.document_base_config_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        28287 => [
            [['_route' => 'api.document_base_config_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        28376 => [
            [['_route' => 'api.document_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        28443 => [
            [['_route' => 'api.document_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        28539 => [
            [['_route' => 'api.document_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        28606 => [
            [['_route' => 'api.document_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        28698 => [
            [['_route' => 'api.flow.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        28765 => [
            [['_route' => 'api.flow.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        28861 => [
            [['_route' => 'api.flow_sequence.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        28928 => [
            [['_route' => 'api.flow_sequence.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        29020 => [
            [['_route' => 'api.flow_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        29087 => [
            [['_route' => 'api.flow_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        29199 => [
            [['_route' => 'api.import_export_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        29266 => [
            [['_route' => 'api.import_export_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        29353 => [
            [['_route' => 'api.import_export_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        29420 => [
            [['_route' => 'api.import_export_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        29511 => [
            [['_route' => 'api.import_export_profile.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        29578 => [
            [['_route' => 'api.import_export_profile.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        29674 => [
            [['_route' => 'api.import_export_profile_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        29741 => [
            [['_route' => 'api.import_export_profile_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        29837 => [
            [['_route' => 'api.integration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        29901 => [[['_route' => 'api.integration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        29989 => [
            [['_route' => 'api.integration_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        30056 => [
            [['_route' => 'api.integration_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30161 => [
            [['_route' => 'api.landing_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        30228 => [
            [['_route' => 'api.landing_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30330 => [
            [['_route' => 'api.landing_page_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        30397 => [
            [['_route' => 'api.landing_page_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30487 => [
            [['_route' => 'api.landing_page_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        30554 => [
            [['_route' => 'api.landing_page_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30648 => [
            [['_route' => 'api.landing_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        30715 => [
            [['_route' => 'api.landing_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30807 => [
            [['_route' => 'api.language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        30874 => [
            [['_route' => 'api.language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30967 => [
            [['_route' => 'api.locale.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        31034 => [
            [['_route' => 'api.locale.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        31130 => [
            [['_route' => 'api.locale_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        31197 => [
            [['_route' => 'api.locale_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        31290 => [
            [['_route' => 'api.log_entry.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        31357 => [
            [['_route' => 'api.log_entry.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        31472 => [
            [['_route' => 'api.mail_header_footer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        31539 => [
            [['_route' => 'api.mail_header_footer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        31635 => [
            [['_route' => 'api.mail_header_footer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        31702 => [
            [['_route' => 'api.mail_header_footer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        31795 => [
            [['_route' => 'api.mail_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        31862 => [
            [['_route' => 'api.mail_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        31955 => [
            [['_route' => 'api.mail_template_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32022 => [
            [['_route' => 'api.mail_template_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        32120 => [
            [['_route' => 'api.mail_template_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32187 => [
            [['_route' => 'api.mail_template_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        32274 => [
            [['_route' => 'api.mail_template_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32341 => [
            [['_route' => 'api.mail_template_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        32437 => [
            [['_route' => 'api.mail_template_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32504 => [
            [['_route' => 'api.mail_template_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        32604 => [
            [['_route' => 'api.main_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.main_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32671 => [
            [['_route' => 'api.main_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        32760 => [
            [['_route' => 'api.media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32827 => [
            [['_route' => 'api.media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        32930 => [
            [['_route' => 'api.media_default_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32997 => [
            [['_route' => 'api.media_default_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        33087 => [
            [['_route' => 'api.media_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        33154 => [
            [['_route' => 'api.media_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        33252 => [
            [['_route' => 'api.media_folder_configuration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        33319 => [
            [['_route' => 'api.media_folder_configuration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        33426 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        33493 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        33585 => [
            [['_route' => 'api.media_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        33652 => [
            [['_route' => 'api.media_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        33744 => [
            [['_route' => 'api.media_thumbnail.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        33811 => [
            [['_route' => 'api.media_thumbnail.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        33900 => [
            [['_route' => 'api.media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        33967 => [
            [['_route' => 'api.media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        34062 => [
            [['_route' => 'api.media_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34129 => [
            [['_route' => 'api.media_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        34241 => [
            [['_route' => 'api.newsletter_recipient.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34308 => [
            [['_route' => 'api.newsletter_recipient.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        34396 => [
            [['_route' => 'api.newsletter_recipient_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34463 => [
            [['_route' => 'api.newsletter_recipient_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        34559 => [
            [['_route' => 'api.notification.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.notification.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.notification.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34626 => [
            [['_route' => 'api.notification.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.notification.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        34722 => [
            [['_route' => 'api.number_range.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34789 => [
            [['_route' => 'api.number_range.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        34894 => [
            [['_route' => 'api.number_range_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34961 => [
            [['_route' => 'api.number_range_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        35049 => [
            [['_route' => 'api.number_range_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        35116 => [
            [['_route' => 'api.number_range_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        35215 => [
            [['_route' => 'api.number_range_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        35282 => [
            [['_route' => 'api.number_range_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        35369 => [
            [['_route' => 'api.number_range_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        35436 => [
            [['_route' => 'api.number_range_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        35532 => [
            [['_route' => 'api.number_range_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        35599 => [
            [['_route' => 'api.number_range_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        35693 => [
            [['_route' => 'api.order.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        35760 => [
            [['_route' => 'api.order.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        35855 => [
            [['_route' => 'api.order_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        35922 => [
            [['_route' => 'api.order_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        36014 => [
            [['_route' => 'api.order_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        36081 => [
            [['_route' => 'api.order_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        36173 => [
            [['_route' => 'api.order_delivery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        36240 => [
            [['_route' => 'api.order_delivery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        36333 => [
            [['_route' => 'api.order_delivery_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        36397 => [[['_route' => 'api.order_delivery_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        36506 => [[['_route' => 'api.order_delivery_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36582 => [[['_route' => 'api.order_line_item.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36655 => [[['_route' => 'api.order_line_item_download.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36725 => [[['_route' => 'api.order_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36801 => [[['_route' => 'api.order_transaction.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36876 => [[['_route' => 'api.order_transaction_capture.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36950 => [[['_route' => 'api.order_transaction_capture_refund.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37023 => [[['_route' => 'api.order_transaction_capture_refund_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37112 => [[['_route' => 'api.payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37188 => [[['_route' => 'api.payment_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37260 => [[['_route' => 'api.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37336 => [[['_route' => 'api.plugin_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37412 => [[['_route' => 'api.product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37494 => [[['_route' => 'api.product_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37563 => [[['_route' => 'api.product_category_tree.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37647 => [[['_route' => 'api.product_configurator_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37726 => [[['_route' => 'api.product_cross_selling.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37812 => [[['_route' => 'api.product_cross_selling_assigned_products.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37886 => [[['_route' => 'api.product_cross_selling_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37968 => [[['_route' => 'api.product_custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38040 => [[['_route' => 'api.product_download.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38109 => [[['_route' => 'api.product_export.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38187 => [[['_route' => 'api.product_feature_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38263 => [[['_route' => 'api.product_feature_set_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38346 => [[['_route' => 'api.product_keyword_dictionary.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38427 => [[['_route' => 'api.product_manufacturer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38503 => [[['_route' => 'api.product_manufacturer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38571 => [[['_route' => 'api.product_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38641 => [[['_route' => 'api.product_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38712 => [[['_route' => 'api.product_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38781 => [[['_route' => 'api.product_property.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38851 => [[['_route' => 'api.product_review.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38937 => [[['_route' => 'api.product_search_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39007 => [[['_route' => 'api.product_search_config_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39078 => [[['_route' => 'api.product_search_keyword.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39151 => [[['_route' => 'api.product_sorting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39227 => [[['_route' => 'api.product_sorting_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39299 => [[['_route' => 'api.product_stream.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39373 => [[['_route' => 'api.product_stream_filter.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39443 => [[['_route' => 'api.product_stream_mapping.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39517 => [[['_route' => 'api.product_stream_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39589 => [[['_route' => 'api.product_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39662 => [[['_route' => 'api.product_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39736 => [[['_route' => 'api.product_visibility.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39810 => [[['_route' => 'api.promotion.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39888 => [[['_route' => 'api.promotion_cart_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39962 => [[['_route' => 'api.promotion_discount.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40036 => [[['_route' => 'api.promotion_discount_prices.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40103 => [[['_route' => 'api.promotion_discount_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40184 => [[['_route' => 'api.promotion_individual_code.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40258 => [[['_route' => 'api.promotion_order_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40341 => [[['_route' => 'api.promotion_persona_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40408 => [[['_route' => 'api.promotion_persona_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40489 => [[['_route' => 'api.promotion_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40562 => [[['_route' => 'api.promotion_setgroup.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40631 => [[['_route' => 'api.promotion_setgroup_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40707 => [[['_route' => 'api.promotion_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40787 => [[['_route' => 'api.property_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40861 => [[['_route' => 'api.property_group_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        40937 => [[['_route' => 'api.property_group_option_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41042 => [[['_route' => 'api.order_delivery_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41118 => [[['_route' => 'api.order_line_item.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41191 => [[['_route' => 'api.order_line_item_download.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41261 => [[['_route' => 'api.order_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41337 => [[['_route' => 'api.order_transaction.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41412 => [[['_route' => 'api.order_transaction_capture.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41486 => [[['_route' => 'api.order_transaction_capture_refund.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41559 => [[['_route' => 'api.order_transaction_capture_refund_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41648 => [[['_route' => 'api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41724 => [[['_route' => 'api.payment_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41796 => [[['_route' => 'api.plugin.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41872 => [[['_route' => 'api.plugin_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        41948 => [[['_route' => 'api.product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42030 => [[['_route' => 'api.product_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42099 => [[['_route' => 'api.product_category_tree.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42183 => [[['_route' => 'api.product_configurator_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42262 => [[['_route' => 'api.product_cross_selling.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42348 => [[['_route' => 'api.product_cross_selling_assigned_products.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42422 => [[['_route' => 'api.product_cross_selling_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42504 => [[['_route' => 'api.product_custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42576 => [[['_route' => 'api.product_download.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42645 => [[['_route' => 'api.product_export.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42723 => [[['_route' => 'api.product_feature_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42799 => [[['_route' => 'api.product_feature_set_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42882 => [[['_route' => 'api.product_keyword_dictionary.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        42963 => [[['_route' => 'api.product_manufacturer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43039 => [[['_route' => 'api.product_manufacturer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43107 => [[['_route' => 'api.product_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43177 => [[['_route' => 'api.product_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43248 => [[['_route' => 'api.product_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43317 => [[['_route' => 'api.product_property.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43387 => [[['_route' => 'api.product_review.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43473 => [[['_route' => 'api.product_search_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43543 => [[['_route' => 'api.product_search_config_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43614 => [[['_route' => 'api.product_search_keyword.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43687 => [[['_route' => 'api.product_sorting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43763 => [[['_route' => 'api.product_sorting_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43835 => [[['_route' => 'api.product_stream.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43909 => [[['_route' => 'api.product_stream_filter.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        43979 => [[['_route' => 'api.product_stream_mapping.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44053 => [[['_route' => 'api.product_stream_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44125 => [[['_route' => 'api.product_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44198 => [[['_route' => 'api.product_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44272 => [[['_route' => 'api.product_visibility.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44346 => [[['_route' => 'api.promotion.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44424 => [[['_route' => 'api.promotion_cart_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44498 => [[['_route' => 'api.promotion_discount.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44572 => [[['_route' => 'api.promotion_discount_prices.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44639 => [[['_route' => 'api.promotion_discount_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44720 => [[['_route' => 'api.promotion_individual_code.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44794 => [[['_route' => 'api.promotion_order_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44877 => [[['_route' => 'api.promotion_persona_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        44944 => [[['_route' => 'api.promotion_persona_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        45025 => [[['_route' => 'api.promotion_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        45098 => [[['_route' => 'api.promotion_setgroup.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        45167 => [[['_route' => 'api.promotion_setgroup_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        45243 => [[['_route' => 'api.promotion_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        45323 => [[['_route' => 'api.property_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        45394 => [[['_route' => 'api.property_group_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        45490 => [[['_route' => 'api.order_delivery_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        45582 => [
            [['_route' => 'api.order_line_item.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45649 => [
            [['_route' => 'api.order_line_item.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45742 => [
            [['_route' => 'api.order_line_item_download.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45809 => [
            [['_route' => 'api.order_line_item_download.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45900 => [
            [['_route' => 'api.order_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45967 => [
            [['_route' => 'api.order_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46061 => [
            [['_route' => 'api.order_transaction.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46128 => [
            [['_route' => 'api.order_transaction.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46220 => [
            [['_route' => 'api.order_transaction_capture.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46287 => [
            [['_route' => 'api.order_transaction_capture.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46378 => [
            [['_route' => 'api.order_transaction_capture_refund.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46445 => [
            [['_route' => 'api.order_transaction_capture_refund.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46538 => [
            [['_route' => 'api.order_transaction_capture_refund_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46605 => [
            [['_route' => 'api.order_transaction_capture_refund_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46712 => [
            [['_route' => 'api.payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46779 => [
            [['_route' => 'api.payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46875 => [
            [['_route' => 'api.payment_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46942 => [
            [['_route' => 'api.payment_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47032 => [
            [['_route' => 'api.plugin.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47099 => [
            [['_route' => 'api.plugin.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47195 => [
            [['_route' => 'api.plugin_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47262 => [
            [['_route' => 'api.plugin_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47356 => [
            [['_route' => 'api.product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47423 => [
            [['_route' => 'api.product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47522 => [
            [['_route' => 'api.product_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47589 => [
            [['_route' => 'api.product_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47678 => [
            [['_route' => 'api.product_category_tree.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47745 => [
            [['_route' => 'api.product_category_tree.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47850 => [
            [['_route' => 'api.product_configurator_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47917 => [
            [['_route' => 'api.product_configurator_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48014 => [
            [['_route' => 'api.product_cross_selling.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48081 => [
            [['_route' => 'api.product_cross_selling.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48187 => [
            [['_route' => 'api.product_cross_selling_assigned_products.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48254 => [
            [['_route' => 'api.product_cross_selling_assigned_products.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48349 => [
            [['_route' => 'api.product_cross_selling_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48416 => [
            [['_route' => 'api.product_cross_selling_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48519 => [
            [['_route' => 'api.product_custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48586 => [
            [['_route' => 'api.product_custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48679 => [
            [['_route' => 'api.product_download.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_download.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_download.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48746 => [
            [['_route' => 'api.product_download.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_download.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48836 => [
            [['_route' => 'api.product_export.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_export.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48903 => [
            [['_route' => 'api.product_export.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48999 => [
            [['_route' => 'api.product_feature_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49066 => [
            [['_route' => 'api.product_feature_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49162 => [
            [['_route' => 'api.product_feature_set_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49229 => [
            [['_route' => 'api.product_feature_set_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49333 => [
            [['_route' => 'api.product_keyword_dictionary.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49400 => [
            [['_route' => 'api.product_keyword_dictionary.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49499 => [
            [['_route' => 'api.product_manufacturer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49566 => [
            [['_route' => 'api.product_manufacturer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49662 => [
            [['_route' => 'api.product_manufacturer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49729 => [
            [['_route' => 'api.product_manufacturer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49818 => [
            [['_route' => 'api.product_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49885 => [
            [['_route' => 'api.product_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49976 => [
            [['_route' => 'api.product_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        50043 => [
            [['_route' => 'api.product_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50135 => [
            [['_route' => 'api.product_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        50202 => [
            [['_route' => 'api.product_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50292 => [
            [['_route' => 'api.product_property.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_property.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        50359 => [
            [['_route' => 'api.product_property.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50450 => [
            [['_route' => 'api.product_review.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_review.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        50517 => [
            [['_route' => 'api.product_review.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50621 => [
            [['_route' => 'api.product_search_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        50688 => [
            [['_route' => 'api.product_search_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50778 => [
            [['_route' => 'api.product_search_config_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        50845 => [
            [['_route' => 'api.product_search_config_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50937 => [
            [['_route' => 'api.product_search_keyword.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51004 => [
            [['_route' => 'api.product_search_keyword.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51095 => [
            [['_route' => 'api.product_sorting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51162 => [
            [['_route' => 'api.product_sorting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51258 => [
            [['_route' => 'api.product_sorting_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51325 => [
            [['_route' => 'api.product_sorting_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51415 => [
            [['_route' => 'api.product_stream.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51482 => [
            [['_route' => 'api.product_stream.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51576 => [
            [['_route' => 'api.product_stream_filter.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51643 => [
            [['_route' => 'api.product_stream_filter.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51734 => [
            [['_route' => 'api.product_stream_mapping.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51801 => [
            [['_route' => 'api.product_stream_mapping.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51896 => [
            [['_route' => 'api.product_stream_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51963 => [
            [['_route' => 'api.product_stream_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52056 => [
            [['_route' => 'api.product_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52123 => [
            [['_route' => 'api.product_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52217 => [
            [['_route' => 'api.product_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52284 => [
            [['_route' => 'api.product_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52379 => [
            [['_route' => 'api.product_visibility.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52446 => [
            [['_route' => 'api.product_visibility.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52538 => [
            [['_route' => 'api.promotion.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52605 => [
            [['_route' => 'api.promotion.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52703 => [
            [['_route' => 'api.promotion_cart_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52770 => [
            [['_route' => 'api.promotion_cart_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52862 => [
            [['_route' => 'api.promotion_discount.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52929 => [
            [['_route' => 'api.promotion_discount.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        53023 => [
            [['_route' => 'api.promotion_discount_prices.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        53090 => [
            [['_route' => 'api.promotion_discount_prices.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        53178 => [
            [['_route' => 'api.promotion_discount_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        53245 => [
            [['_route' => 'api.promotion_discount_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        53347 => [
            [['_route' => 'api.promotion_individual_code.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        53414 => [
            [['_route' => 'api.promotion_individual_code.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        53509 => [
            [['_route' => 'api.promotion_order_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        53576 => [
            [['_route' => 'api.promotion_order_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        53680 => [
            [['_route' => 'api.promotion_persona_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        53747 => [
            [['_route' => 'api.promotion_persona_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        53835 => [
            [['_route' => 'api.promotion_persona_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        53902 => [
            [['_route' => 'api.promotion_persona_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        54004 => [
            [['_route' => 'api.promotion_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        54071 => [
            [['_route' => 'api.promotion_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        54162 => [
            [['_route' => 'api.promotion_setgroup.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        54229 => [
            [['_route' => 'api.promotion_setgroup.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        54318 => [
            [['_route' => 'api.promotion_setgroup_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        54385 => [
            [['_route' => 'api.promotion_setgroup_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        54482 => [
            [['_route' => 'api.promotion_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        54549 => [
            [['_route' => 'api.promotion_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        54647 => [
            [['_route' => 'api.property_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        54714 => [
            [['_route' => 'api.property_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        54805 => [
            [['_route' => 'api.property_group_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        54872 => [
            [['_route' => 'api.property_group_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        54968 => [
            [['_route' => 'api.property_group_option_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        55032 => [[['_route' => 'api.property_group_option_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        55163 => [[['_route' => 'api.property_group_option_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55237 => [[['_route' => 'api.property_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55308 => [[['_route' => 'api.rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55385 => [[['_route' => 'api.rule_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55451 => [[['_route' => 'api.rule_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55539 => [[['_route' => 'api.sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55616 => [[['_route' => 'api.sales_channel_analytics.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55689 => [[['_route' => 'api.sales_channel_country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55759 => [[['_route' => 'api.sales_channel_currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55829 => [[['_route' => 'api.sales_channel_domain.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55900 => [[['_route' => 'api.sales_channel_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55978 => [[['_route' => 'api.sales_channel_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56057 => [[['_route' => 'api.sales_channel_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56134 => [[['_route' => 'api.sales_channel_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56203 => [[['_route' => 'api.sales_channel_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56279 => [[['_route' => 'api.sales_channel_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56356 => [[['_route' => 'api.salutation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56432 => [[['_route' => 'api.salutation_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56514 => [[['_route' => 'api.scheduled_task.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56581 => [[['_route' => 'api.script.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56655 => [[['_route' => 'api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56728 => [[['_route' => 'api.seo_url_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56810 => [[['_route' => 'api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56883 => [[['_route' => 'api.shipping_method_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56952 => [[['_route' => 'api.shipping_method_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57025 => [[['_route' => 'api.shipping_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57100 => [[['_route' => 'api.snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57168 => [[['_route' => 'api.snippet_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57248 => [[['_route' => 'api.state_machine.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57323 => [[['_route' => 'api.state_machine_history.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57394 => [[['_route' => 'api.state_machine_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57470 => [[['_route' => 'api.state_machine_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57547 => [[['_route' => 'api.state_machine_transition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57616 => [[['_route' => 'api.state_machine_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57695 => [[['_route' => 'api.system_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57768 => [[['_route' => 'api.tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57835 => [[['_route' => 'api.tax.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57914 => [[['_route' => 'api.tax_provider.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57990 => [[['_route' => 'api.tax_provider_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58061 => [[['_route' => 'api.tax_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58133 => [[['_route' => 'api.tax_rule_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58209 => [[['_route' => 'api.tax_rule_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58284 => [[['_route' => 'api.theme.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58357 => [[['_route' => 'api.theme_child.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58425 => [[['_route' => 'api.theme_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58502 => [[['_route' => 'api.theme_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58576 => [[['_route' => 'api.theme_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58652 => [[['_route' => 'api.unit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58728 => [[['_route' => 'api.unit_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58798 => [[['_route' => 'api.user.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58877 => [[['_route' => 'api.user_access_key.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58946 => [[['_route' => 'api.user_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59017 => [[['_route' => 'api.user_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59093 => [[['_route' => 'api.version.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59167 => [[['_route' => 'api.version_commit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59236 => [[['_route' => 'api.version_commit_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59311 => [[['_route' => 'api.webhook.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59386 => [[['_route' => 'api.webhook_event_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59483 => [[['_route' => 'api.property_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59553 => [[['_route' => 'api.rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59630 => [[['_route' => 'api.rule_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59696 => [[['_route' => 'api.rule_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59784 => [[['_route' => 'api.sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59861 => [[['_route' => 'api.sales_channel_analytics.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59934 => [[['_route' => 'api.sales_channel_country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60004 => [[['_route' => 'api.sales_channel_currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60074 => [[['_route' => 'api.sales_channel_domain.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60145 => [[['_route' => 'api.sales_channel_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60223 => [[['_route' => 'api.sales_channel_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60302 => [[['_route' => 'api.sales_channel_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60379 => [[['_route' => 'api.sales_channel_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60448 => [[['_route' => 'api.sales_channel_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60524 => [[['_route' => 'api.sales_channel_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60601 => [[['_route' => 'api.salutation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60677 => [[['_route' => 'api.salutation_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60759 => [[['_route' => 'api.scheduled_task.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60826 => [[['_route' => 'api.script.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60900 => [[['_route' => 'api.seo_url.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60973 => [[['_route' => 'api.seo_url_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61055 => [[['_route' => 'api.shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61128 => [[['_route' => 'api.shipping_method_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61197 => [[['_route' => 'api.shipping_method_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61270 => [[['_route' => 'api.shipping_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61345 => [[['_route' => 'api.snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61413 => [[['_route' => 'api.snippet_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61493 => [[['_route' => 'api.state_machine.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61568 => [[['_route' => 'api.state_machine_history.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61639 => [[['_route' => 'api.state_machine_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61715 => [[['_route' => 'api.state_machine_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61792 => [[['_route' => 'api.state_machine_transition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61861 => [[['_route' => 'api.state_machine_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61940 => [[['_route' => 'api.system_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62013 => [[['_route' => 'api.tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62080 => [[['_route' => 'api.tax.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62159 => [[['_route' => 'api.tax_provider.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62235 => [[['_route' => 'api.tax_provider_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62306 => [[['_route' => 'api.tax_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62378 => [[['_route' => 'api.tax_rule_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62454 => [[['_route' => 'api.tax_rule_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62529 => [[['_route' => 'api.theme.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62602 => [[['_route' => 'api.theme_child.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62670 => [[['_route' => 'api.theme_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62747 => [[['_route' => 'api.theme_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62821 => [[['_route' => 'api.theme_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62897 => [[['_route' => 'api.unit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62973 => [[['_route' => 'api.unit_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63043 => [[['_route' => 'api.user.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63122 => [[['_route' => 'api.user_access_key.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63191 => [[['_route' => 'api.user_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63262 => [[['_route' => 'api.user_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63338 => [[['_route' => 'api.version.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63412 => [[['_route' => 'api.version_commit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63481 => [[['_route' => 'api.version_commit_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63556 => [[['_route' => 'api.webhook.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63631 => [[['_route' => 'api.webhook_event_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63722 => [
            [['_route' => 'api.seo_url.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63789 => [
            [['_route' => 'api.seo_url.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63882 => [
            [['_route' => 'api.seo_url_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63949 => [
            [['_route' => 'api.seo_url_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64051 => [
            [['_route' => 'api.sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64118 => [
            [['_route' => 'api.sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64215 => [
            [['_route' => 'api.sales_channel_analytics.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64282 => [
            [['_route' => 'api.sales_channel_analytics.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64376 => [
            [['_route' => 'api.sales_channel_country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64443 => [
            [['_route' => 'api.sales_channel_country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64534 => [
            [['_route' => 'api.sales_channel_currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64601 => [
            [['_route' => 'api.sales_channel_currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64692 => [
            [['_route' => 'api.sales_channel_domain.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64759 => [
            [['_route' => 'api.sales_channel_domain.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64851 => [
            [['_route' => 'api.sales_channel_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64918 => [
            [['_route' => 'api.sales_channel_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65017 => [
            [['_route' => 'api.sales_channel_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65084 => [
            [['_route' => 'api.sales_channel_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65184 => [
            [['_route' => 'api.sales_channel_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65251 => [
            [['_route' => 'api.sales_channel_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65349 => [
            [['_route' => 'api.sales_channel_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65416 => [
            [['_route' => 'api.sales_channel_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65503 => [
            [['_route' => 'api.sales_channel_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65570 => [
            [['_route' => 'api.sales_channel_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65666 => [
            [['_route' => 'api.sales_channel_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65733 => [
            [['_route' => 'api.sales_channel_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65828 => [
            [['_route' => 'api.salutation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65895 => [
            [['_route' => 'api.salutation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65991 => [
            [['_route' => 'api.salutation_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66058 => [
            [['_route' => 'api.salutation_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66161 => [
            [['_route' => 'api.scheduled_task.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66228 => [
            [['_route' => 'api.scheduled_task.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66316 => [
            [['_route' => 'api.script.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.script.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.script.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66383 => [
            [['_route' => 'api.script.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.script.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66483 => [
            [['_route' => 'api.shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66550 => [
            [['_route' => 'api.shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66643 => [
            [['_route' => 'api.shipping_method_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66710 => [
            [['_route' => 'api.shipping_method_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66800 => [
            [['_route' => 'api.shipping_method_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66867 => [
            [['_route' => 'api.shipping_method_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66961 => [
            [['_route' => 'api.shipping_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67028 => [
            [['_route' => 'api.shipping_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67121 => [
            [['_route' => 'api.snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67188 => [
            [['_route' => 'api.snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67276 => [
            [['_route' => 'api.snippet_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67343 => [
            [['_route' => 'api.snippet_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67441 => [
            [['_route' => 'api.state_machine.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67508 => [
            [['_route' => 'api.state_machine.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67603 => [
            [['_route' => 'api.state_machine_history.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67670 => [
            [['_route' => 'api.state_machine_history.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67759 => [
            [['_route' => 'api.state_machine_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67826 => [
            [['_route' => 'api.state_machine_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67922 => [
            [['_route' => 'api.state_machine_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67989 => [
            [['_route' => 'api.state_machine_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68087 => [
            [['_route' => 'api.state_machine_transition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68154 => [
            [['_route' => 'api.state_machine_transition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68244 => [
            [['_route' => 'api.state_machine_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68311 => [
            [['_route' => 'api.state_machine_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68411 => [
            [['_route' => 'api.system_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.system_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68478 => [
            [['_route' => 'api.system_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68583 => [[['_route' => 'api.property_group_option_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        68676 => [
            [['_route' => 'api.property_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68743 => [
            [['_route' => 'api.property_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68832 => [
            [['_route' => 'api.rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68899 => [
            [['_route' => 'api.rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68996 => [
            [['_route' => 'api.rule_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69063 => [
            [['_route' => 'api.rule_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69150 => [
            [['_route' => 'api.rule_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69217 => [
            [['_route' => 'api.rule_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69312 => [
            [['_route' => 'api.tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69379 => [
            [['_route' => 'api.tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69464 => [
            [['_route' => 'api.tax.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69531 => [
            [['_route' => 'api.tax.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69627 => [
            [['_route' => 'api.tax_provider.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69694 => [
            [['_route' => 'api.tax_provider.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69790 => [
            [['_route' => 'api.tax_provider_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69857 => [
            [['_route' => 'api.tax_provider_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69946 => [
            [['_route' => 'api.tax_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70013 => [
            [['_route' => 'api.tax_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70102 => [
            [['_route' => 'api.tax_rule_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70169 => [
            [['_route' => 'api.tax_rule_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70265 => [
            [['_route' => 'api.tax_rule_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70332 => [
            [['_route' => 'api.tax_rule_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70425 => [
            [['_route' => 'api.theme.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70492 => [
            [['_route' => 'api.theme.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70585 => [
            [['_route' => 'api.theme_child.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70652 => [
            [['_route' => 'api.theme_child.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70741 => [
            [['_route' => 'api.theme_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70808 => [
            [['_route' => 'api.theme_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70906 => [
            [['_route' => 'api.theme_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70973 => [
            [['_route' => 'api.theme_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71068 => [
            [['_route' => 'api.theme_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        71135 => [
            [['_route' => 'api.theme_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71229 => [
            [['_route' => 'api.unit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        71296 => [
            [['_route' => 'api.unit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71392 => [
            [['_route' => 'api.unit_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        71459 => [
            [['_route' => 'api.unit_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71544 => [[['_route' => 'api.user.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        71607 => [[['_route' => 'api.user.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        71705 => [
            [['_route' => 'api.user_access_key.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        71772 => [
            [['_route' => 'api.user_access_key.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71862 => [
            [['_route' => 'api.user_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        71929 => [
            [['_route' => 'api.user_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        72021 => [
            [['_route' => 'api.user_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        72088 => [
            [['_route' => 'api.user_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        72113 => [[['_route' => 'api.user.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUser'], ['userId'], ['DELETE' => 0], null, false, true, null]],
        72148 => [[['_route' => 'api.user_access_keys.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user_access_key:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserAccessKey'], ['userId', 'id'], ['DELETE' => 0], null, false, true, null]],
        72175 => [[['_route' => 'api.user_role.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_user_role:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserRole'], ['userId', 'roleId'], ['DELETE' => 0], null, false, true, null]],
        72186 => [[['_route' => 'api.user.update', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateUser'], ['userId'], ['PATCH' => 0], null, false, true, null]],
        72197 => [[['_route' => 'api.user.create', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], [], ['POST' => 0], null, false, false, null]],
        72288 => [
            [['_route' => 'api.version.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        72355 => [
            [['_route' => 'api.version.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        72446 => [
            [['_route' => 'api.version_commit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        72513 => [
            [['_route' => 'api.version_commit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        72602 => [
            [['_route' => 'api.version_commit_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        72669 => [
            [['_route' => 'api.version_commit_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        72762 => [
            [['_route' => 'api.webhook.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        72829 => [
            [['_route' => 'api.webhook.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        72924 => [
            [['_route' => 'api.webhook_event_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        72991 => [
            [['_route' => 'api.webhook_event_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        73016 => [[['_route' => 'api.acl_role.create', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertRole'], [], ['POST' => 0], null, false, false, null]],
        73038 => [
            [['_route' => 'api.acl_role.update', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateRole'], ['roleId'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_role.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteRole'], ['roleId'], ['DELETE' => 0], null, false, true, null],
        ],
        73064 => [[['_route' => 'api.integration.create', '_routeScope' => ['api'], '_acl' => ['integration:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IntegrationController::upsertIntegration'], [], ['POST' => 0], null, false, false, null]],
        73083 => [
            [['_route' => 'api.integration.update', '_routeScope' => ['api'], '_acl' => ['integration:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IntegrationController::updateIntegration'], ['integrationId'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
