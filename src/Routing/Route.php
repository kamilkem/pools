<?php

/**
 * This file is part of the pools package.
 *
 * (c) Kamil Kozaczyński <kozaczynski.kamil@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Routing;

class Route
{
    public function __construct(private string $method, private string $path, private string $name, callable $callback)
    {
    }

    public static function GET(string $path, string $name, callable $callback): self
    {
        return new self('GET', $path, $name, $callback);
    }
}
