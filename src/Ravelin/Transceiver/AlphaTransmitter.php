<?php

declare(strict_types=1);

namespace Ebln\PolyphonicComposing\Ravelin\Transceiver;

use Ebln\PolyphonicComposing\Ravelin\Contract\AlphaRequest;
use Ebln\PolyphonicComposing\Ravelin\Contract\AlphaResponse;
use Ebln\PolyphonicComposing\Ravelin\Contract\ResponseInterface;

/**
 * Local Procedure Call
 */
final class AlphaTransmitter
{
    public function call(AlphaRequest $request): ?AlphaResponse
    {
        $result = shell_exec('APP_SYMBIONT=alpha bin/run symbiont:alpha \'' . serialize($request) . '\'');

        if (!is_string($result)) {
            return null;
        }

        return unserialize($result, ['allowed_classes' => ResponseInterface::ALLOWED_RESULTS, 'max_depth' => 7]);
    }
}
