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

class PoolController
{
    public static function getPools(): array
    {
        return [
            'Pool 1',
            'Pool 2',
            'Pool 3',
        ];
    }
}
