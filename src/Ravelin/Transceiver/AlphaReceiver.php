<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Ravelin\Transceiver;

use Ebln\ParasiteDemo\Ravelin\Contract\AlphaRequest;
use Ebln\ParasiteDemo\Ravelin\Contract\AlphaResponse;

class AlphaReceiver
{
    public function getRequest(string $message): AlphaRequest
    {
        return unserialize($message, ['allowed_classes' => [AlphaRequest::class], 'max_depth' => 7]);
    }

    public function reply(AlphaResponse $response): void
    {
        echo serialize($response);
    }
}
