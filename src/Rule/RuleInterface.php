<?php

declare(strict_types=1);

namespace App\Rule;

use App\Model\Player\PlayerInterface;

/**
 * Interface RuleInterface
 * @package App\Rule
 */
interface RuleInterface
{
    /**
     * @param PlayerInterface $p1
     * @param PlayerInterface $p2
     * @return PlayerInterface|null
     */
    public function execute(PlayerInterface $p1, PlayerInterface $p2): ?PlayerInterface;
}
