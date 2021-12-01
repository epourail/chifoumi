<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Model\HandPosition\HandPositionInterface;

/**
 * Interface StrategyInterface
 * @package App\Strategy
 */
interface StrategyInterface
{
    /**
     * @return HandPositionInterface
     */
    public function play(): HandPositionInterface;

    /**
     * @return string
     */
    public function __toString();
}
