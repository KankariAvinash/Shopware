<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1WRYasx\Shopware_Core_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1WRYasx/Shopware_Core_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1WRYasx.legacy');

    return;
}

if (!\class_exists(Shopware_Core_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1WRYasx\Shopware_Core_KernelDevDebugContainer::class, Shopware_Core_KernelDevDebugContainer::class, false);
}

return new \Container1WRYasx\Shopware_Core_KernelDevDebugContainer([
    'container.build_hash' => '1WRYasx',
    'container.build_id' => 'ba86f560',
    'container.build_time' => 1703929421,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1WRYasx');
