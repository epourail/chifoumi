<?php

declare(strict_types=1);

namespace App\Model\HandPosition;

use App\Enum\HandEnum;

/**
 * Class PaperHandPositionSingleton
 * @package App\Model\HandPosition
 */
class PaperHandPositionSingleton implements HandPositionInterface
{
    /** @var HandPositionInterface $instance */
    private static HandPositionInterface $instance;

    public static function getInstance(): HandPositionInterface
    {
        return self::$instance ?? (self::$instance = new PaperHandPositionSingleton());
    }

    public function get(): string
    {
        return HandEnum::PAPER;
    }
}