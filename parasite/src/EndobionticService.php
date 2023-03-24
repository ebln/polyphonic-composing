<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Endobiont;

use Ebln\ParasiteDemo\Ravelin\Transceiver\AlphaReceiver;

class EndobionticService
{
    public function __construct(private ActionProcessor $actionProcessor, private AlphaReceiver $receiver)
    {
    }

    public function handle(): void
    {
        $request = $this->receiver->getRequest();
        if (!$request) {
            // log!
            return;
        }

        $this->receiver->reply(
            $this->actionProcessor->process($request)
        );
    }
}
