<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Enum\StrategyEnum;
use App\Model\HandPosition\HandPositionInterface;
use App\Model\HandPosition\PaperHandPositionSingleton;

/**
 * Class OnlyPaperStrategy
 * @package App\Strategy
 */
class OnlyPaperStrategy implements StrategyInterface
{
    public function play(): HandPositionInterface
    {
        return PaperHandPositionSingleton::getInstance();
    }

    public function __toString()
    {
        return StrategyEnum::STRATEGY_ONLYPAPER;
    }
}