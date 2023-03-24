<?php

declare(strict_types=1);

namespace Ebln\PolyphonicComposing\Symbiont\Service;

use Ebln\Composer\Debug\ProvokeConflict\Creed;
use Ebln\PolyphonicComposing\Ravelin\Contract\AlphaRequest;
use Ebln\PolyphonicComposing\Ravelin\Contract\AlphaResponse;

final class AlphaProcessor
{
    public function process(AlphaRequest $request): AlphaResponse
    {
        return new AlphaResponse(
            'Result from endobiontic process',
            [
                'desc'             => 'Endobiontic process was triggered.',
                'composer flavour' => Creed::AVOWAL,
            ],
            $request
        );
    }
}
