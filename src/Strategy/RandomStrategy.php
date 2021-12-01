<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Enum\StrategyEnum;
use App\Model\HandPosition\HandPositionInterface;
use App\Model\HandPosition\PaperHandPositionSingleton;
use App\Model\HandPosition\RockHandPositionSingleton;
use App\Model\HandPosition\ScissorsHandPositionSingleton;

/**
 * Class RandomStrategy
 * @package App\Strategy
 */
class RandomStrategy implements StrategyInterface
{
    /** @var array $handPositions */
    private array $handPositions = [];

    public function __construct()
    {
        srand(time());

        $this->handPositions = [
            RockHandPositionSingleton::getInstance(),
            PaperHandPositionSingleton::getInstance(),
            ScissorsHandPositionSingleton::getInstance()
        ];
    }

    public function play(): HandPositionInterface
    {
        $random = rand(0, 2);
        return $this->handPositions[$random];
    }

    public function __toString()
    {
        return StrategyEnum::STRATEGY_RANDOM;
    }
}