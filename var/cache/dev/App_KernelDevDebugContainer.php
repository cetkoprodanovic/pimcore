<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCcF9MAJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCcF9MAJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCcF9MAJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCcF9MAJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCcF9MAJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'CcF9MAJ',
    'container.build_id' => '9c856280',
    'container.build_time' => 1639236464,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCcF9MAJ');
