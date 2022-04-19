<?php

declare(strict_types=1);

namespace Kanvas\Content\Enums;

class State
{
    const ON = 1;
    const OFF = 0;
    const YES = self::ON;
    const NO = self::OFF;
    const OPEN = self::ON;
    const CLOSED = self::OFF;
}
