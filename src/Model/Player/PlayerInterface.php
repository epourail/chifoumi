<?php

declare(strict_types=1);

namespace App\Model\Player;

use App\Model\HandPosition\HandPositionInterface;
use App\Strategy\StrategyInterface;

/**
 * Interface PlayerInterface
 * @package App\Model\Player
 */
interface PlayerInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return StrategyInterface
     */
    public function getStrategy(): StrategyInterface;

    /**
     * @return HandPositionInterface
     */
    public function play(): HandPositionInterface;
}
