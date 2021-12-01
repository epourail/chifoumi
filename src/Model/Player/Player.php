<?php

declare(strict_types=1);

namespace App\Model\Player;

use App\Model\HandPosition\HandPositionInterface;
use App\Strategy\StrategyInterface;

/**
 * Class Player
 * @package App\Model\Player
 */
class Player implements PlayerInterface
{
    /** @var StrategyInterface $strategy */
    private StrategyInterface $strategy;

    /** @var string $name */
    private string $name;

    public function play(): HandPositionInterface
    {
        return $this->getStrategy()->play();
    }

    public function setStrategy(StrategyInterface $strategy): Player
    {
        $this->strategy = $strategy;
        return $this;
    }

    public function getStrategy(): StrategyInterface
    {
        return $this->strategy;
    }

    public function setName(string $name): Player
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->getName() . ' ('.$this->getStrategy().')';
    }
}