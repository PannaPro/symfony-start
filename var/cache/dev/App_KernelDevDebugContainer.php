<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWRg6yVW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWRg6yVW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWRg6yVW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWRg6yVW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWRg6yVW\App_KernelDevDebugContainer([
    'container.build_hash' => 'WRg6yVW',
    'container.build_id' => 'ed6ccb26',
    'container.build_time' => 1713884022,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWRg6yVW');
