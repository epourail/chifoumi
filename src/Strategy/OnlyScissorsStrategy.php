<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Enum\StrategyEnum;
use App\Model\HandPosition\HandPositionInterface;
use App\Model\HandPosition\ScissorsHandPositionSingleton;

/**
 * Class OnlyScissorsStrategy
 * @package App\Strategy
 */
class OnlyScissorsStrategy implements StrategyInterface
{
    public function play(): HandPositionInterface
    {
        return ScissorsHandPositionSingleton::getInstance();
    }

    public function __toString()
    {
        return StrategyEnum::STRATEGY_ONLYSCISSORS;
    }
}