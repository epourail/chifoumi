<?php

namespace App\Command;

use App\Model\Match\Match;
use App\Player\Player;
use App\Enum\StrategyEnum;
use App\Rule\DefaultRule;
use App\Strategy\StrategyFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ChifoumiPlayCommand extends Command
{
    protected static $defaultName = 'chifoumi:play';
    protected static $defaultDescription = 'Add a short description for your command';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $strategy1 = StrategyEnum::STRATEGY_RANDOM;
        $strategy2 = StrategyEnum::STRATEGY_RANDOM;

        $io->info("Match : $strategy1 vs $strategy2");
        $match = new Match($strategy1, $strategy2);
        $results = $match->getResults();
        $io->table(\array_keys($results), [\array_values($results)]);

        return Command::SUCCESS;
    }
}
