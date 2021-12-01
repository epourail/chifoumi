<?php

declare(strict_types=1);

namespace App\Rule;

use App\Enum\HandEnum;

/**
 * Class RandomRule
 * @package App\Rule
 */
class RandomRule extends AbstractRule
{
    public function __construct()
    {
        srand(time());
    }

    protected function getMatrixRule(): array {
        return [
            HandEnum::ROCK => [
                HandEnum::ROCK => rand(2), HandEnum::PAPER => rand(2), HandEnum::SCISSORS => rand(2)
            ],
            HandEnum::PAPER => [
                HandEnum::ROCK => rand(2), HandEnum::PAPER => rand(2), HandEnum::SCISSORS => rand(2)
            ],
            HandEnum::SCISSORS => [
                HandEnum::ROCK => rand(2), HandEnum::PAPER => rand(2), HandEnum::SCISSORS => rand(2)
            ],
        ];
    }
}