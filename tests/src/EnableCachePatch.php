<?php

declare(strict_types=1);

namespace Spiral\Twig\Tests;

use Spiral\Config\PatchInterface;

final class EnableCachePatch implements PatchInterface
{
    public function patch(array $config): array
    {
        $config['cache']['enable'] = true;

        return $config;
    }
}
