<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1yruyfo\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1yruyfo/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container1yruyfo.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container1yruyfo\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container1yruyfo\appDevDebugProjectContainer([
    'container.build_hash' => '1yruyfo',
    'container.build_id' => '04c6f533',
    'container.build_time' => 1687127380,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1yruyfo');
