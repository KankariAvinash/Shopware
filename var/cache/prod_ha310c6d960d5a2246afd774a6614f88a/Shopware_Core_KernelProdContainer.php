<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBj3d9te\Shopware_Core_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBj3d9te/Shopware_Core_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerBj3d9te.legacy');

    return;
}

if (!\class_exists(Shopware_Core_KernelProdContainer::class, false)) {
    \class_alias(\ContainerBj3d9te\Shopware_Core_KernelProdContainer::class, Shopware_Core_KernelProdContainer::class, false);
}

return new \ContainerBj3d9te\Shopware_Core_KernelProdContainer([
    'container.build_hash' => 'Bj3d9te',
    'container.build_id' => '95bd3200',
    'container.build_time' => 1703627416,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBj3d9te');