<?php

declare(strict_types=1);

namespace App\Rule;

use App\Enum\HandEnum;

/**
 * Class DefaultRule
 * @package App\Rule
 */
class DefaultRule extends AbstractRule
{
    protected function getMatrixRule(): array {
        return [
            HandEnum::ROCK => [
                HandEnum::ROCK => 0, HandEnum::PAPER => 2, HandEnum::SCISSORS => 1
            ],
            HandEnum::PAPER => [
                HandEnum::ROCK => 1, HandEnum::PAPER => 0, HandEnum::SCISSORS => 2
            ],
            HandEnum::SCISSORS => [
                HandEnum::ROCK => 2, HandEnum::PAPER => 1, HandEnum::SCISSORS => 0
            ],
        ];
    }
}