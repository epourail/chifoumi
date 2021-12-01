<?php

declare(strict_types=1);

namespace App\Rule;

use App\Model\Player\PlayerInterface;

/**
 * Class AbstractRule
 * @package App\Rule
 */
abstract class AbstractRule implements RuleInterface
{
    // The matrix template to use, replace the X by the following values:
    // - 0 : none hand win
    // - 1 : p1 wins
    // - 2 : p2 wins

    // private array $matrix = [
    //     HandEnum::ROCK => [
    //         HandEnum::ROCK => X, HandEnum::PAPER => X, HandEnum::SCISSORS => X
    //     ],
    //     HandEnum::PAPER => [
    //         HandEnum::ROCK => X, HandEnum::PAPER => X, HandEnum::SCISSORS => X
    //     ],
    //     HandEnum::SCISSORS => [
    //         HandEnum::ROCK => X, HandEnum::PAPER => X, HandEnum::SCISSORS => X
    //     ],
    // ];

    abstract protected function getMatrixRule(): array;

    public function execute(PlayerInterface $p1, PlayerInterface $p2): ?PlayerInterface
    {
        $matrix = $this->getMatrixRule();

        switch ($matrix[$p1->play()->get()][$p2->play()->get()]) {
            case 1:
                return $p1;
            case 2:
                return $p2;
            case 0:
            default:
                return null;
        }
    }
}