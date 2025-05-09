<?php

declare(strict_types=1);

/*
 * This file is part of rekalogika/file-src package.
 *
 * (c) Priyadi Iman Nurcahyo <https://rekalogika.dev>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace Rekalogika\Contracts\File\Exception;

final class MetadataNotFoundException extends \RuntimeException implements FileException
{
    public function __construct(string $metadataName, ?\Throwable $previous = null)
    {
        parent::__construct(
            \sprintf('Metadata "%s" is not found', $metadataName),
            0,
            $previous,
        );
    }
}
