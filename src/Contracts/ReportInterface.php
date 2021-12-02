<?php

declare(strict_types=1);

namespace Kanvas\Content\Contracts;

use Baka\Contracts\Database\ModelInterface;

interface ReportInterface
{
    public function isOpen() : bool;
    public function isClosed() : bool;
    public function getEntityData() : ?ModelInterface;
}
