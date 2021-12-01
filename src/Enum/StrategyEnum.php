<?php

declare(strict_types=1);

namespace App\Enum;

/**
 * Class StrategyEnum
 * @package App\Enum
 */
abstract class StrategyEnum
{
    public const STRATEGY_ONLYROCK = 'onlyrock';
    public const STRATEGY_ONLYPAPER = 'onlypaper';
    public const STRATEGY_ONLYSCISSORS = 'onlyscissors';
    public const STRATEGY_RANDOM = 'random';
}
