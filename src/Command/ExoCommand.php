<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Command;

use Ebln\ParasiteDemo\Ravelin\Contract\AlphaRequest;
use Ebln\ParasiteDemo\Ravelin\Transceiver\AlphaTransmitter;
use Ebln\ParasiteDemo\Service\ExobionticService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:run')]
class ExoCommand extends Command
{
    public function __construct(private AlphaTransmitter $alphaTransceiver, private ExobionticService $exobionticService)
    {
        parent::__construct(null);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Exo-Command started…');

        // TODO use unix socket

        $output->writeln('==== ENDOBIONT = RAW =====');

        $request      = new AlphaRequest('REQUEST', ['parameter' => ['foo', 42]]);
        $deserialized = $this->alphaTransceiver->call($request);

        $output->writeln(json_encode($deserialized, JSON_PRETTY_PRINT));
        $output->writeln('==== ENDOBIONT = END =====');

        $output->writeln($this->exobionticService->act());

        return Command::SUCCESS;
    }

}
