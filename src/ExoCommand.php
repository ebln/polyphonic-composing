<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo;

use Ebln\ParasiteDemo\Interface\EndobionticInterface;
use Ebln\ParasiteDemo\Interface\ExobionticRequest;
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

        // TODO use unix socket
        var_dump(stream_get_transports());

        $parameter = new ExobionticRequest('REQUEST', ['parameter' => ['foo', 42]]);

        $parasite = shell_exec('php parasite/entry.php \'' . serialize($parameter) . '\'');

        $output->writeln('==== ENDOBIONT = RAW =====');
        $output->writeln($parasite);
        $output->writeln('==== ENDOBIONT = RESULT =====');
        $deserialized = unserialize($parasite, ['allowed_classes' => EndobionticInterface::ALLOWED_RESULTS, 'max_depth' => 7]);
        $output->writeln(json_encode($deserialized, JSON_PRETTY_PRINT));
        $output->writeln('==== ENDOBIONT = END =====');

        $service = new ExobionticService();
        $output->writeln($service->act());

        return Command::SUCCESS;
    }

}
