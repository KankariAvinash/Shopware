<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0kWNbPz\Shopware_Core_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0kWNbPz/Shopware_Core_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0kWNbPz.legacy');

    return;
}

if (!\class_exists(Shopware_Core_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0kWNbPz\Shopware_Core_KernelDevDebugContainer::class, Shopware_Core_KernelDevDebugContainer::class, false);
}

return new \Container0kWNbPz\Shopware_Core_KernelDevDebugContainer([
    'container.build_hash' => '0kWNbPz',
    'container.build_id' => '0605ae01',
    'container.build_time' => 1704139839,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0kWNbPz');
