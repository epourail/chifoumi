<?php

declare(strict_types=1);

namespace App\Rule;

use App\Enum\RuleEnum;

/**
 * Class RuleFactory
 * @package App\Rule
 */
class RuleFactory
{
    static public function create(string $name): RuleInterface
    {
        switch ($name) {
            case RuleEnum::RULE_RANDOM:
                return new RandomRule();

            case RuleEnum::RULE_DEFAULT:
            default:
                return new DefaultRule();
        }
    }
}