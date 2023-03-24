<?php

declare(strict_types=1);

namespace Ebln\PolyphonicComposing\Symbiont\Service;

use Ebln\PolyphonicComposing\Ravelin\Transceiver\AlphaReceiver;

final class AlphaHandler
{
    public function __construct(private AlphaProcessor $actionProcessor, private AlphaReceiver $receiver)
    {
    }

    public function handle(string $message): void
    {
        $request = $this->receiver->getRequest($message);
        if (!$request) {
            // log!
            return;
        }

        $this->receiver->reply(
            $this->actionProcessor->process($request)
        );
    }
}
