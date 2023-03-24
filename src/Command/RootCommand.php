<?php

declare(strict_types=1);

namespace Ebln\PolyphonicComposing\Command;

use Ebln\PolyphonicComposing\Ravelin\Contract\AlphaRequest;
use Ebln\PolyphonicComposing\Ravelin\Transceiver\AlphaTransmitter;
use Ebln\PolyphonicComposing\Service\ExobionticService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:run')]
final class RootCommand extends Command
{
    public function __construct(private AlphaTransmitter $alphaTransceiver, private ExobionticService $exobionticService)
    {
        parent::__construct(null);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(['Starting with root composer flavour…', '']);

        $output->writeln(['Calling the «Alpha» endobiont:', '']);

        $request      = new AlphaRequest('REQUEST', ['parameter' => ['foo', 42]]);
        $deserialized = $this->alphaTransceiver->call($request);

        $output->writeln(json_encode($deserialized, JSON_PRETTY_PRINT));
        $output->writeln(['', 'Calling a root service…', '']);

        $output->writeln($this->exobionticService->act());

        return Command::SUCCESS;
    }
}
