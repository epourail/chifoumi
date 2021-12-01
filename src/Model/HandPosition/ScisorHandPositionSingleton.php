<?php

declare(strict_types=1);

namespace App\Model\HandPosition;

use App\Enum\HandEnum;

/**
 * Class ScissorsHandPositionSingleton
 * @package App\Model\HandPosition
 */
class ScissorsHandPositionSingleton implements HandPositionInterface
{
    /** @var HandPositionInterface $instance */
    private static HandPositionInterface $instance;

    public static function getInstance(): HandPositionInterface
    {
        return self::$instance ?? (self::$instance = new ScissorsHandPositionSingleton());
    }

    public function get(): string
    {
        return HandEnum::SCISSORS;
    }
}