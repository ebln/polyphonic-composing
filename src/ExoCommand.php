<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:run')]
class ExoCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Exo-Command started…');
        $service = new ExobionticService();

        $output->writeln($service->act());

        return Command::SUCCESS;
    }
}
