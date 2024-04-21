<?php

declare(strict_types=1);

namespace DiManifest;

abstract class AbstractDependencyInjection
{
    abstract public static function getDependencies(): array;
}
