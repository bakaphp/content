<?php

declare(strict_types=1);

namespace Kanvas\Content\Contracts;

interface ContentInterface
{
    public function isPublished() : bool;
    public function isIndexable() : bool;
    public function isPublic(bool $exception = true);
    public function clearCache() : void;
}
