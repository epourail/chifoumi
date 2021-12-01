<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Enum\StrategyEnum;
use App\Model\HandPosition\HandPositionInterface;
use App\Model\HandPosition\RockHandPositionSingleton;

/**
 * Class OnlyRockStrategy
 * @package App\Strategy
 */
class OnlyRockStrategy implements StrategyInterface
{
    public function play(): HandPositionInterface
    {
        return RockHandPositionSingleton::getInstance();
    }

    public function __toString()
    {
        return StrategyEnum::STRATEGY_ONLYROCK;
    }
}