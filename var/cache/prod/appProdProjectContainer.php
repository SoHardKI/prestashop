<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAdvvxzo\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAdvvxzo/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerAdvvxzo.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerAdvvxzo\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerAdvvxzo\appProdProjectContainer([
    'container.build_hash' => 'Advvxzo',
    'container.build_id' => '40cf0a27',
    'container.build_time' => 1573073052,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAdvvxzo');
