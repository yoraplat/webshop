<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6tYzPFa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6tYzPFa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6tYzPFa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6tYzPFa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6tYzPFa\App_KernelDevDebugContainer([
    'container.build_hash' => '6tYzPFa',
    'container.build_id' => '30ae8bb3',
    'container.build_time' => 1628171780,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6tYzPFa');
