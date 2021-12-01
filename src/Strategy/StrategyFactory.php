<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Enum\StrategyEnum;
use App\Exception\Exception;

/**
 * Class StrategyFactory
 * @package App\Strategy
 */
class StrategyFactory
{
    static public function create(string $name): StrategyInterface
    {
        switch ($name) {
            case StrategyEnum::STRATEGY_ONLYROCK:
                return new OnlyRockStrategy();

            case StrategyEnum::STRATEGY_ONLYPAPER:
                return new OnlyPaperStrategy();

            case StrategyEnum::STRATEGY_ONLYSCISSORS:
                return new OnlyScissorsStrategy();

            case StrategyEnum::STRATEGY_RANDOM:
            default:
                return new RandomStrategy();
        }
    }
}