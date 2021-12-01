<?php

declare(strict_types=1);

namespace App\Model\Match;

use App\Enum\RuleEnum;
use App\Model\Player\Player;
use App\Model\Player\PlayerInterface;
use App\Rule\RuleFactory;
use App\Strategy\StrategyFactory;

/**
 * Class Match
 * @package App\Model\Match
 */
class Match implements MatchInterface
{
    private const MAX_TURN = 1000;

    /** @var string $strategy1 */
    private string $strategy1;

    /** @var PlayerInterface $p1 */
    private PlayerInterface $p1;

    /** @var PlayerInterface $2 */
    private PlayerInterface $p2;

    /** @var string $strategy2 */
    private string $strategy2;

    /** @var string $rule */
    private string $rule;

    /** @var array $results */
    private array $results =  [];

    /**
     * @param string $strategy1
     * @param string $strategy2
     * @param string $rule
     */
    public function __construct(string $strategy1, string $strategy2, string $rule = RuleEnum::RULE_DEFAULT)
    {
        $this->strategy1 = $strategy1;
        $this->strategy2 = $strategy2;
        $this->rule = $rule;
    }

    /**
     * {@inheritDoc}
     */
    public function getResults(): array
    {
        if (empty($this->results)) {
            $this->play();
        }

        return [
            (string)$this->p1 => $this->percent($this->p1, $this->results) . '%',
            (string)$this->p2 => $this->percent($this->p2, $this->results) . '%',
            '(equality)' =>  $this->percent(null, $this->results) . '%',
        ];
    }

    /**
     *
     */
    protected function play(): void
    {
        $this->p1 = $this->p1 ?? (new Player())
            ->setName('Player1')
            ->setStrategy(
                StrategyFactory::create($this->strategy1)
            );

        $this->p2 = $this->p2 ?? (new Player())
            ->setName('Player2')
            ->setStrategy(
                StrategyFactory::create($this->strategy2)
            );

        for ($i=0; $i<self::MAX_TURN; $i++) {
            $this->results[] = RuleFactory::create($this->rule)
                ->execute($this->p1, $this->p2);
        }
    }

    /**
     * @param PlayerInterface|null $p
     * @param array                $results
     * @return string
     */
    private function percent(?PlayerInterface $p, array $results): string
    {
        return number_format(
            \count(\array_filter($results, fn($r) => $r === $p))/self::MAX_TURN * 100, 2
        );
    }
}