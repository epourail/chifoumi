<?php

declare(strict_types=1);

namespace App\Model\HandPosition;

use App\Enum\HandEnum;

/**
 * Class RockHandPositionSingleton
 * @package App\Model\HandPosition
 */
class RockHandPositionSingleton implements HandPositionInterface
{
    /** @var HandPositionInterface $instance */
    private static HandPositionInterface $instance;

    public static function getInstance(): HandPositionInterface
    {
        return self::$instance ?? (self::$instance = new RockHandPositionSingleton());
    }

    public function get(): string
    {
        return HandEnum::ROCK;
    }
}