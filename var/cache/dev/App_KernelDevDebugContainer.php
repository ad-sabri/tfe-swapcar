<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXRyiHcg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXRyiHcg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXRyiHcg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXRyiHcg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXRyiHcg\App_KernelDevDebugContainer([
    'container.build_hash' => 'XRyiHcg',
    'container.build_id' => 'a01aeddf',
    'container.build_time' => 1624452254,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXRyiHcg');