<?php

declare(strict_types=1);

namespace Kanvas\Content\Contracts;

interface CommentInterface
{
    public function isParent() : bool;
}
