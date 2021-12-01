<?php

declare(strict_types=1);

namespace App\Model\Match;

use App\Model\HandPosition\HandPositionInterface;

/**
 * Interface MatchInterface
 * @package App\Model\Player
 */
interface MatchInterface
{
    /**
     * @return array
     */
    public function getResults(): array;
}
