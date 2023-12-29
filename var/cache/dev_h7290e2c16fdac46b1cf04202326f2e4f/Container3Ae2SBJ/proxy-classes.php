<?php

namespace Container3Ae2SBJ;

include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Checkout/Cart/SalesChannel/CartService.php';

class CartServiceGhost32c4436 extends \Shopware\Core\Checkout\Cart\SalesChannel\CartService implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'calculator' => [parent::class, 'calculator', parent::class],
        "\0".parent::class."\0".'cart' => [parent::class, 'cart', null],
        "\0".parent::class."\0".'cartFactory' => [parent::class, 'cartFactory', parent::class],
        "\0".parent::class."\0".'deleteRoute' => [parent::class, 'deleteRoute', parent::class],
        "\0".parent::class."\0".'eventDispatcher' => [parent::class, 'eventDispatcher', parent::class],
        "\0".parent::class."\0".'itemAddRoute' => [parent::class, 'itemAddRoute', parent::class],
        "\0".parent::class."\0".'itemRemoveRoute' => [parent::class, 'itemRemoveRoute', parent::class],
        "\0".parent::class."\0".'itemUpdateRoute' => [parent::class, 'itemUpdateRoute', parent::class],
        "\0".parent::class."\0".'loadRoute' => [parent::class, 'loadRoute', parent::class],
        "\0".parent::class."\0".'orderRoute' => [parent::class, 'orderRoute', parent::class],
        "\0".parent::class."\0".'persister' => [parent::class, 'persister', parent::class],
        'calculator' => [parent::class, 'calculator', parent::class],
        'cart' => [parent::class, 'cart', null],
        'cartFactory' => [parent::class, 'cartFactory', parent::class],
        'deleteRoute' => [parent::class, 'deleteRoute', parent::class],
        'eventDispatcher' => [parent::class, 'eventDispatcher', parent::class],
        'itemAddRoute' => [parent::class, 'itemAddRoute', parent::class],
        'itemRemoveRoute' => [parent::class, 'itemRemoveRoute', parent::class],
        'itemUpdateRoute' => [parent::class, 'itemUpdateRoute', parent::class],
        'loadRoute' => [parent::class, 'loadRoute', parent::class],
        'orderRoute' => [parent::class, 'orderRoute', parent::class],
        'persister' => [parent::class, 'persister', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CartServiceGhost32c4436', false)) {
    \class_alias(__NAMESPACE__.'\\CartServiceGhost32c4436', 'CartServiceGhost32c4436', false);
}
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Plugin/Composer/CommandExecutor.php';

class CommandExecutorGhostE8b86ba extends \Shopware\Core\Framework\Plugin\Composer\CommandExecutor implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'application' => [parent::class, 'application', parent::class],
        "\0".parent::class."\0".'projectDir' => [parent::class, 'projectDir', parent::class],
        'application' => [parent::class, 'application', parent::class],
        'projectDir' => [parent::class, 'projectDir', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CommandExecutorGhostE8b86ba', false)) {
    \class_alias(__NAMESPACE__.'\\CommandExecutorGhostE8b86ba', 'CommandExecutorGhostE8b86ba', false);
}
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Store/Services/StoreService.php';

class StoreServiceGhost6a43734 extends \Shopware\Core\Framework\Store\Services\StoreService implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'userRepository' => [parent::class, 'userRepository', parent::class],
        'userRepository' => [parent::class, 'userRepository', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('StoreServiceGhost6a43734', false)) {
    \class_alias(__NAMESPACE__.'\\StoreServiceGhost6a43734', 'StoreServiceGhost6a43734', false);
}
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Webhook/Hookable/HookableEventFactory.php';

class HookableEventFactoryGhost35f7785 extends \Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'eventEncoder' => [parent::class, 'eventEncoder', parent::class],
        "\0".parent::class."\0".'writeResultMerger' => [parent::class, 'writeResultMerger', parent::class],
        'eventEncoder' => [parent::class, 'eventEncoder', parent::class],
        'writeResultMerger' => [parent::class, 'writeResultMerger', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('HookableEventFactoryGhost35f7785', false)) {
    \class_alias(__NAMESPACE__.'\\HookableEventFactoryGhost35f7785', 'HookableEventFactoryGhost35f7785', false);
}
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/ExtendableInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/AssignArrayTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/CloneTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/CreateFromTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/ExtendableTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/JsonSerializableTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/VariablesAccessTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/Struct.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/Collection.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/System/Snippet/Files/SnippetFileCollection.php';

class SnippetFileCollectionProxy5c898b8 extends \Shopware\Core\System\Snippet\Files\SnippetFileCollection implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'elements' => [parent::class, 'elements', null],
        "\0".'*'."\0".'extensions' => [parent::class, 'extensions', null],
        "\0".parent::class."\0".'mapping' => [parent::class, 'mapping', null],
        'elements' => [parent::class, 'elements', null],
        'extensions' => [parent::class, 'extensions', null],
        'mapping' => [parent::class, 'mapping', null],
    ];

    public function add($snippetFile): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->add(...\func_get_args());
        } else {
            parent::add(...\func_get_args());
        }
    }

    public function get($key): ?\Shopware\Core\System\Snippet\Files\AbstractSnippetFile
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->get(...\func_get_args());
        }

        return parent::get(...\func_get_args());
    }

    public function set($key, $element): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->set(...\func_get_args());
        } else {
            parent::set(...\func_get_args());
        }
    }

    public function clear(): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->clear(...\func_get_args());
        } else {
            parent::clear(...\func_get_args());
        }
    }

    public function remove($key): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->remove(...\func_get_args());
        } else {
            parent::remove(...\func_get_args());
        }
    }

    public function getByName(string $key): ?\Shopware\Core\System\Snippet\Files\AbstractSnippetFile
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getByName(...\func_get_args());
        }

        return parent::getByName(...\func_get_args());
    }

    public function getFilesArray(bool $isBase = true): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getFilesArray(...\func_get_args());
        }

        return parent::getFilesArray(...\func_get_args());
    }

    public function toArray(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->toArray(...\func_get_args());
        }

        return parent::toArray(...\func_get_args());
    }

    public function getIsoList(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getIsoList(...\func_get_args());
        }

        return parent::getIsoList(...\func_get_args());
    }

    public function getSnippetFilesByIso(string $iso): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getSnippetFilesByIso(...\func_get_args());
        }

        return parent::getSnippetFilesByIso(...\func_get_args());
    }

    public function getBaseFileByIso(string $iso): \Shopware\Core\System\Snippet\Files\AbstractSnippetFile
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getBaseFileByIso(...\func_get_args());
        }

        return parent::getBaseFileByIso(...\func_get_args());
    }

    public function getApiAlias(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getApiAlias(...\func_get_args());
        }

        return parent::getApiAlias(...\func_get_args());
    }

    public function hasFileForPath(string $filePath): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hasFileForPath(...\func_get_args());
        }

        return parent::hasFileForPath(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function count(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->count(...\func_get_args());
        }

        return parent::count(...\func_get_args());
    }

    public function getKeys(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getKeys(...\func_get_args());
        }

        return parent::getKeys(...\func_get_args());
    }

    public function has($key): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->has(...\func_get_args());
        }

        return parent::has(...\func_get_args());
    }

    public function map(\Closure $closure): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->map(...\func_get_args());
        }

        return parent::map(...\func_get_args());
    }

    public function fmap(\Closure $closure): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->fmap(...\func_get_args());
        }

        return parent::fmap(...\func_get_args());
    }

    public function sort(\Closure $closure): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sort(...\func_get_args());
        } else {
            parent::sort(...\func_get_args());
        }
    }

    public function getElements(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getElements(...\func_get_args());
        }

        return parent::getElements(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function jsonSerialize(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->jsonSerialize(...\func_get_args());
        }

        return parent::jsonSerialize(...\func_get_args());
    }

    public function addExtension(string $name, \Shopware\Core\Framework\Struct\Struct $extension): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->addExtension(...\func_get_args());
        } else {
            parent::addExtension(...\func_get_args());
        }
    }

    public function addArrayExtension(string $name, array $extension): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->addArrayExtension(...\func_get_args());
        } else {
            parent::addArrayExtension(...\func_get_args());
        }
    }

    public function addExtensions(array $extensions): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->addExtensions(...\func_get_args());
        } else {
            parent::addExtensions(...\func_get_args());
        }
    }

    public function hasExtension(string $name): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hasExtension(...\func_get_args());
        }

        return parent::hasExtension(...\func_get_args());
    }

    public function hasExtensionOfType(string $name, string $type): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hasExtensionOfType(...\func_get_args());
        }

        return parent::hasExtensionOfType(...\func_get_args());
    }

    public function getExtensions(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getExtensions(...\func_get_args());
        }

        return parent::getExtensions(...\func_get_args());
    }

    public function setExtensions(array $extensions): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setExtensions(...\func_get_args());
        } else {
            parent::setExtensions(...\func_get_args());
        }
    }

    public function removeExtension(string $name): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->removeExtension(...\func_get_args());
        } else {
            parent::removeExtension(...\func_get_args());
        }
    }

    public function getVars(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getVars(...\func_get_args());
        }

        return parent::getVars(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('SnippetFileCollectionProxy5c898b8', false)) {
    \class_alias(__NAMESPACE__.'\\SnippetFileCollectionProxy5c898b8', 'SnippetFileCollectionProxy5c898b8', false);
}
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/System/Snippet/SnippetService.php';

class SnippetServiceGhost4734c54 extends \Shopware\Core\System\Snippet\SnippetService implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'connection' => [parent::class, 'connection', parent::class],
        "\0".parent::class."\0".'container' => [parent::class, 'container', parent::class],
        "\0".parent::class."\0".'salesChannelDomain' => [parent::class, 'salesChannelDomain', parent::class],
        "\0".parent::class."\0".'salesChannelThemeLoader' => [parent::class, 'salesChannelThemeLoader', parent::class],
        "\0".parent::class."\0".'snippetFileCollection' => [parent::class, 'snippetFileCollection', parent::class],
        "\0".parent::class."\0".'snippetFilterFactory' => [parent::class, 'snippetFilterFactory', parent::class],
        "\0".parent::class."\0".'snippetRepository' => [parent::class, 'snippetRepository', parent::class],
        "\0".parent::class."\0".'snippetSetRepository' => [parent::class, 'snippetSetRepository', parent::class],
        'connection' => [parent::class, 'connection', parent::class],
        'container' => [parent::class, 'container', parent::class],
        'salesChannelDomain' => [parent::class, 'salesChannelDomain', parent::class],
        'salesChannelThemeLoader' => [parent::class, 'salesChannelThemeLoader', parent::class],
        'snippetFileCollection' => [parent::class, 'snippetFileCollection', parent::class],
        'snippetFilterFactory' => [parent::class, 'snippetFilterFactory', parent::class],
        'snippetRepository' => [parent::class, 'snippetRepository', parent::class],
        'snippetSetRepository' => [parent::class, 'snippetSetRepository', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('SnippetServiceGhost4734c54', false)) {
    \class_alias(__NAMESPACE__.'\\SnippetServiceGhost4734c54', 'SnippetServiceGhost4734c54', false);
}
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/System/SystemConfig/SystemConfigService.php';

class SystemConfigServiceGhostBa5c9a6 extends \Shopware\Core\System\SystemConfig\SystemConfigService implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'appMapping' => [parent::class, 'appMapping', null],
        "\0".parent::class."\0".'configReader' => [parent::class, 'configReader', parent::class],
        "\0".parent::class."\0".'connection' => [parent::class, 'connection', parent::class],
        "\0".parent::class."\0".'eventDispatcher' => [parent::class, 'eventDispatcher', parent::class],
        "\0".parent::class."\0".'fineGrainedCache' => [parent::class, 'fineGrainedCache', parent::class],
        "\0".parent::class."\0".'keys' => [parent::class, 'keys', null],
        "\0".parent::class."\0".'loader' => [parent::class, 'loader', parent::class],
        "\0".parent::class."\0".'traces' => [parent::class, 'traces', null],
        'appMapping' => [parent::class, 'appMapping', null],
        'configReader' => [parent::class, 'configReader', parent::class],
        'connection' => [parent::class, 'connection', parent::class],
        'eventDispatcher' => [parent::class, 'eventDispatcher', parent::class],
        'fineGrainedCache' => [parent::class, 'fineGrainedCache', parent::class],
        'keys' => [parent::class, 'keys', null],
        'loader' => [parent::class, 'loader', parent::class],
        'traces' => [parent::class, 'traces', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('SystemConfigServiceGhostBa5c9a6', false)) {
    \class_alias(__NAMESPACE__.'\\SystemConfigServiceGhostBa5c9a6', 'SystemConfigServiceGhostBa5c9a6', false);
}
include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Controller/StorefrontController.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Controller/ErrorController.php';

class ErrorControllerGhost79ad257 extends \Shopware\Storefront\Controller\ErrorController implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'container' => [parent::class, 'container', null],
        "\0".'*'."\0".'errorTemplateResolver' => [parent::class, 'errorTemplateResolver', null],
        "\0".parent::class."\0".'errorPageLoader' => [parent::class, 'errorPageLoader', parent::class],
        "\0".parent::class."\0".'footerPageletLoader' => [parent::class, 'footerPageletLoader', parent::class],
        "\0".parent::class."\0".'headerPageletLoader' => [parent::class, 'headerPageletLoader', parent::class],
        "\0".parent::class."\0".'systemConfigService' => [parent::class, 'systemConfigService', parent::class],
        "\0".'Shopware\\Storefront\\Controller\\StorefrontController'."\0".'twig' => ['Shopware\\Storefront\\Controller\\StorefrontController', 'twig', null],
        'container' => [parent::class, 'container', null],
        'errorPageLoader' => [parent::class, 'errorPageLoader', parent::class],
        'errorTemplateResolver' => [parent::class, 'errorTemplateResolver', null],
        'footerPageletLoader' => [parent::class, 'footerPageletLoader', parent::class],
        'headerPageletLoader' => [parent::class, 'headerPageletLoader', parent::class],
        'systemConfigService' => [parent::class, 'systemConfigService', parent::class],
        'twig' => ['Shopware\\Storefront\\Controller\\StorefrontController', 'twig', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ErrorControllerGhost79ad257', false)) {
    \class_alias(__NAMESPACE__.'\\ErrorControllerGhost79ad257', 'ErrorControllerGhost79ad257', false);
}
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Theme/AbstractResolvedConfigLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Theme/ResolvedConfigLoader.php';

class ResolvedConfigLoaderGhostC35c4d4 extends \Shopware\Storefront\Theme\ResolvedConfigLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'repository' => [parent::class, 'repository', parent::class],
        "\0".parent::class."\0".'service' => [parent::class, 'service', parent::class],
        'repository' => [parent::class, 'repository', parent::class],
        'service' => [parent::class, 'service', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ResolvedConfigLoaderGhostC35c4d4', false)) {
    \class_alias(__NAMESPACE__.'\\ResolvedConfigLoaderGhostC35c4d4', 'ResolvedConfigLoaderGhostC35c4d4', false);
}
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Theme/AbstractThemePathBuilder.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Theme/SeedingThemePathBuilder.php';

class SeedingThemePathBuilderGhost96d383c extends \Shopware\Storefront\Theme\SeedingThemePathBuilder implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'systemConfigService' => [parent::class, 'systemConfigService', parent::class],
        'systemConfigService' => [parent::class, 'systemConfigService', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('SeedingThemePathBuilderGhost96d383c', false)) {
    \class_alias(__NAMESPACE__.'\\SeedingThemePathBuilderGhost96d383c', 'SeedingThemePathBuilderGhost96d383c', false);
}
include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestPayloadValueResolver.php';

class RequestPayloadValueResolverGhost9d49d33 extends \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestPayloadValueResolver implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'serializer' => [parent::class, 'serializer', parent::class],
        "\0".parent::class."\0".'translator' => [parent::class, 'translator', parent::class],
        "\0".parent::class."\0".'validator' => [parent::class, 'validator', parent::class],
        'serializer' => [parent::class, 'serializer', parent::class],
        'translator' => [parent::class, 'translator', parent::class],
        'validator' => [parent::class, 'validator', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('RequestPayloadValueResolverGhost9d49d33', false)) {
    \class_alias(__NAMESPACE__.'\\RequestPayloadValueResolverGhost9d49d33', 'RequestPayloadValueResolverGhost9d49d33', false);
}
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/psr/http-client/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';

class ClientGhostD1baff0 extends \GuzzleHttp\Client implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'config' => [parent::class, 'config', null],
        'config' => [parent::class, 'config', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ClientGhostD1baff0', false)) {
    \class_alias(__NAMESPACE__.'\\ClientGhostD1baff0', 'ClientGhostD1baff0', false);
}
include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PackageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Package.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/UrlPackage.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Adapter/Asset/FallbackUrlPackage.php';

class FallbackUrlPackageGhost915d69c extends \Shopware\Core\Framework\Adapter\Asset\FallbackUrlPackage implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'requestStack' => [parent::class, 'requestStack', parent::class],
        "\0".'Symfony\\Component\\Asset\\Package'."\0".'context' => ['Symfony\\Component\\Asset\\Package', 'context', null],
        "\0".'Symfony\\Component\\Asset\\Package'."\0".'versionStrategy' => ['Symfony\\Component\\Asset\\Package', 'versionStrategy', null],
        "\0".'Symfony\\Component\\Asset\\UrlPackage'."\0".'baseUrls' => ['Symfony\\Component\\Asset\\UrlPackage', 'baseUrls', null],
        "\0".'Symfony\\Component\\Asset\\UrlPackage'."\0".'sslPackage' => ['Symfony\\Component\\Asset\\UrlPackage', 'sslPackage', null],
        'baseUrls' => ['Symfony\\Component\\Asset\\UrlPackage', 'baseUrls', null],
        'context' => ['Symfony\\Component\\Asset\\Package', 'context', null],
        'requestStack' => [parent::class, 'requestStack', parent::class],
        'sslPackage' => ['Symfony\\Component\\Asset\\UrlPackage', 'sslPackage', null],
        'versionStrategy' => ['Symfony\\Component\\Asset\\Package', 'versionStrategy', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('FallbackUrlPackageGhost915d69c', false)) {
    \class_alias(__NAMESPACE__.'\\FallbackUrlPackageGhost915d69c', 'FallbackUrlPackageGhost915d69c', false);
}
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Theme/ThemeAssetPackage.php';

class ThemeAssetPackageGhost34a6b9f extends \Shopware\Storefront\Theme\ThemeAssetPackage implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'Shopware\\Core\\Framework\\Adapter\\Asset\\FallbackUrlPackage'."\0".'requestStack' => ['Shopware\\Core\\Framework\\Adapter\\Asset\\FallbackUrlPackage', 'requestStack', 'Shopware\\Core\\Framework\\Adapter\\Asset\\FallbackUrlPackage'],
        "\0".parent::class."\0".'requestStack' => [parent::class, 'requestStack', parent::class],
        "\0".parent::class."\0".'themePathBuilder' => [parent::class, 'themePathBuilder', parent::class],
        "\0".'Symfony\\Component\\Asset\\Package'."\0".'context' => ['Symfony\\Component\\Asset\\Package', 'context', null],
        "\0".'Symfony\\Component\\Asset\\Package'."\0".'versionStrategy' => ['Symfony\\Component\\Asset\\Package', 'versionStrategy', null],
        "\0".'Symfony\\Component\\Asset\\UrlPackage'."\0".'baseUrls' => ['Symfony\\Component\\Asset\\UrlPackage', 'baseUrls', null],
        "\0".'Symfony\\Component\\Asset\\UrlPackage'."\0".'sslPackage' => ['Symfony\\Component\\Asset\\UrlPackage', 'sslPackage', null],
        'baseUrls' => ['Symfony\\Component\\Asset\\UrlPackage', 'baseUrls', null],
        'context' => ['Symfony\\Component\\Asset\\Package', 'context', null],
        'requestStack' => [parent::class, 'requestStack', parent::class],
        'sslPackage' => ['Symfony\\Component\\Asset\\UrlPackage', 'sslPackage', null],
        'themePathBuilder' => [parent::class, 'themePathBuilder', parent::class],
        'versionStrategy' => ['Symfony\\Component\\Asset\\Package', 'versionStrategy', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ThemeAssetPackageGhost34a6b9f', false)) {
    \class_alias(__NAMESPACE__.'\\ThemeAssetPackageGhost34a6b9f', 'ThemeAssetPackageGhost34a6b9f', false);
}
include_once \dirname(__DIR__, 4).'/vendor/opensearch-project/opensearch-php/src/OpenSearch/Client.php';

class ClientProxy20b8e4f extends \OpenSearch\Client implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'asyncSearch' => [parent::class, 'asyncSearch', null],
        "\0".'*'."\0".'cat' => [parent::class, 'cat', null],
        "\0".'*'."\0".'cluster' => [parent::class, 'cluster', null],
        "\0".'*'."\0".'danglingIndices' => [parent::class, 'danglingIndices', null],
        "\0".'*'."\0".'dataFrameTransformDeprecated' => [parent::class, 'dataFrameTransformDeprecated', null],
        "\0".'*'."\0".'endpoints' => [parent::class, 'endpoints', null],
        "\0".'*'."\0".'indices' => [parent::class, 'indices', null],
        "\0".'*'."\0".'ingest' => [parent::class, 'ingest', null],
        "\0".'*'."\0".'monitoring' => [parent::class, 'monitoring', null],
        "\0".'*'."\0".'nodes' => [parent::class, 'nodes', null],
        "\0".'*'."\0".'params' => [parent::class, 'params', null],
        "\0".'*'."\0".'registeredNamespaces' => [parent::class, 'registeredNamespaces', null],
        "\0".'*'."\0".'searchableSnapshots' => [parent::class, 'searchableSnapshots', null],
        "\0".'*'."\0".'security' => [parent::class, 'security', null],
        "\0".'*'."\0".'snapshot' => [parent::class, 'snapshot', null],
        "\0".'*'."\0".'sql' => [parent::class, 'sql', null],
        "\0".'*'."\0".'ssl' => [parent::class, 'ssl', null],
        "\0".'*'."\0".'tasks' => [parent::class, 'tasks', null],
        'asyncSearch' => [parent::class, 'asyncSearch', null],
        'cat' => [parent::class, 'cat', null],
        'cluster' => [parent::class, 'cluster', null],
        'danglingIndices' => [parent::class, 'danglingIndices', null],
        'dataFrameTransformDeprecated' => [parent::class, 'dataFrameTransformDeprecated', null],
        'endpoints' => [parent::class, 'endpoints', null],
        'indices' => [parent::class, 'indices', null],
        'ingest' => [parent::class, 'ingest', null],
        'monitoring' => [parent::class, 'monitoring', null],
        'nodes' => [parent::class, 'nodes', null],
        'params' => [parent::class, 'params', null],
        'registeredNamespaces' => [parent::class, 'registeredNamespaces', null],
        'searchableSnapshots' => [parent::class, 'searchableSnapshots', null],
        'security' => [parent::class, 'security', null],
        'snapshot' => [parent::class, 'snapshot', null],
        'sql' => [parent::class, 'sql', null],
        'ssl' => [parent::class, 'ssl', null],
        'tasks' => [parent::class, 'tasks', null],
        'transport' => [parent::class, 'transport', null],
    ];

    public function exists(array $params = []): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->exists(...\func_get_args());
        }

        return parent::exists(...\func_get_args());
    }

    public function existsSource(array $params = []): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->existsSource(...\func_get_args());
        }

        return parent::existsSource(...\func_get_args());
    }

    public function ping(array $params = []): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ping(...\func_get_args());
        }

        return parent::ping(...\func_get_args());
    }

    public function cat(): \OpenSearch\Namespaces\CatNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->cat(...\func_get_args());
        }

        return parent::cat(...\func_get_args());
    }

    public function cluster(): \OpenSearch\Namespaces\ClusterNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->cluster(...\func_get_args());
        }

        return parent::cluster(...\func_get_args());
    }

    public function danglingIndices(): \OpenSearch\Namespaces\DanglingIndicesNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->danglingIndices(...\func_get_args());
        }

        return parent::danglingIndices(...\func_get_args());
    }

    public function indices(): \OpenSearch\Namespaces\IndicesNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->indices(...\func_get_args());
        }

        return parent::indices(...\func_get_args());
    }

    public function ingest(): \OpenSearch\Namespaces\IngestNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ingest(...\func_get_args());
        }

        return parent::ingest(...\func_get_args());
    }

    public function nodes(): \OpenSearch\Namespaces\NodesNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->nodes(...\func_get_args());
        }

        return parent::nodes(...\func_get_args());
    }

    public function snapshot(): \OpenSearch\Namespaces\SnapshotNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->snapshot(...\func_get_args());
        }

        return parent::snapshot(...\func_get_args());
    }

    public function tasks(): \OpenSearch\Namespaces\TasksNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->tasks(...\func_get_args());
        }

        return parent::tasks(...\func_get_args());
    }

    public function asyncSearch(): \OpenSearch\Namespaces\AsyncSearchNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->asyncSearch(...\func_get_args());
        }

        return parent::asyncSearch(...\func_get_args());
    }

    public function dataFrameTransformDeprecated(): \OpenSearch\Namespaces\DataFrameTransformDeprecatedNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dataFrameTransformDeprecated(...\func_get_args());
        }

        return parent::dataFrameTransformDeprecated(...\func_get_args());
    }

    public function monitoring(): \OpenSearch\Namespaces\MonitoringNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->monitoring(...\func_get_args());
        }

        return parent::monitoring(...\func_get_args());
    }

    public function searchableSnapshots(): \OpenSearch\Namespaces\SearchableSnapshotsNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->searchableSnapshots(...\func_get_args());
        }

        return parent::searchableSnapshots(...\func_get_args());
    }

    public function security(): \OpenSearch\Namespaces\SecurityNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->security(...\func_get_args());
        }

        return parent::security(...\func_get_args());
    }

    public function ssl(): \OpenSearch\Namespaces\SslNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ssl(...\func_get_args());
        }

        return parent::ssl(...\func_get_args());
    }

    public function sql(): \OpenSearch\Namespaces\SqlNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sql(...\func_get_args());
        }

        return parent::sql(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ClientProxy20b8e4f', false)) {
    \class_alias(__NAMESPACE__.'\\ClientProxy20b8e4f', 'ClientProxy20b8e4f', false);
}

class ClientProxyD1baff0 extends \GuzzleHttp\Client implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'config' => [parent::class, 'config', null],
        'config' => [parent::class, 'config', null],
    ];

    public function sendAsync(\Psr\Http\Message\RequestInterface $request, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sendAsync(...\func_get_args());
        }

        return parent::sendAsync(...\func_get_args());
    }

    public function send(\Psr\Http\Message\RequestInterface $request, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->send(...\func_get_args());
        }

        return parent::send(...\func_get_args());
    }

    public function sendRequest(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sendRequest(...\func_get_args());
        }

        return parent::sendRequest(...\func_get_args());
    }

    public function requestAsync(string $method, $uri = '', array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->requestAsync(...\func_get_args());
        }

        return parent::requestAsync(...\func_get_args());
    }

    public function request(string $method, $uri = '', array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->request(...\func_get_args());
        }

        return parent::request(...\func_get_args());
    }

    public function get($uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->get(...\func_get_args());
        }

        return parent::get(...\func_get_args());
    }

    public function head($uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->head(...\func_get_args());
        }

        return parent::head(...\func_get_args());
    }

    public function put($uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->put(...\func_get_args());
        }

        return parent::put(...\func_get_args());
    }

    public function post($uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->post(...\func_get_args());
        }

        return parent::post(...\func_get_args());
    }

    public function patch($uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->patch(...\func_get_args());
        }

        return parent::patch(...\func_get_args());
    }

    public function delete($uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->delete(...\func_get_args());
        }

        return parent::delete(...\func_get_args());
    }

    public function getAsync($uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getAsync(...\func_get_args());
        }

        return parent::getAsync(...\func_get_args());
    }

    public function headAsync($uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->headAsync(...\func_get_args());
        }

        return parent::headAsync(...\func_get_args());
    }

    public function putAsync($uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->putAsync(...\func_get_args());
        }

        return parent::putAsync(...\func_get_args());
    }

    public function postAsync($uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->postAsync(...\func_get_args());
        }

        return parent::postAsync(...\func_get_args());
    }

    public function patchAsync($uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->patchAsync(...\func_get_args());
        }

        return parent::patchAsync(...\func_get_args());
    }

    public function deleteAsync($uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->deleteAsync(...\func_get_args());
        }

        return parent::deleteAsync(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ClientProxyD1baff0', false)) {
    \class_alias(__NAMESPACE__.'\\ClientProxyD1baff0', 'ClientProxyD1baff0', false);
}
