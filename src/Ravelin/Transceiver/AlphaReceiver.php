<?php

declare(strict_types=1);

namespace Ebln\PolyphonicComposing\Ravelin\Transceiver;

use Ebln\PolyphonicComposing\Ravelin\Contract\AlphaRequest;
use Ebln\PolyphonicComposing\Ravelin\Contract\AlphaResponse;

final class AlphaReceiver
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
