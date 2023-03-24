<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Symbiont\Command;

use Ebln\ParasiteDemo\Symbiont\Service\AlphaHandler;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'symbiont:alpha')]
class AlphaCommand extends Command
{
    public function __construct(private AlphaHandler $handler)
    {
        parent::__construct(null);
    }

    protected function configure()
    {
        $this->addArgument('message', InputArgument::REQUIRED, 'Command expects serialized object as message!');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->handler->handle($input->getArgument('message'));

        return Command::SUCCESS;
    }

}
