<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5dKLUI4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5dKLUI4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5dKLUI4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5dKLUI4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5dKLUI4\App_KernelDevDebugContainer([
    'container.build_hash' => '5dKLUI4',
    'container.build_id' => 'f18aed1f',
    'container.build_time' => 1654334224,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5dKLUI4');
