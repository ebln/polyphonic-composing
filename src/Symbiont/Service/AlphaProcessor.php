<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Symbiont\Service;

use Ebln\Composer\Debug\ProvokeConflict\Creed;
use Ebln\ParasiteDemo\Ravelin\Contract\AlphaResponse;
use Ebln\ParasiteDemo\Ravelin\Contract\AlphaRequest;

class AlphaProcessor
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
