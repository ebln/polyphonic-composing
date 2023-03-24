<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Ravelin\Transceiver;

use Ebln\ParasiteDemo\Ravelin\Contract\AlphaRequest;
use Ebln\ParasiteDemo\Ravelin\Contract\AlphaResponse;
use Ebln\ParasiteDemo\Ravelin\Contract\ResponseInterface;

/**
 * Local Procedure Call
 */
class AlphaTransmitter
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
