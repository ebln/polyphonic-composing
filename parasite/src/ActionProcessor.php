<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Endobiont;

use Ebln\ParasiteDemo\Ravelin\Contract\AlphaResponse;
use Ebln\ParasiteDemo\Ravelin\Contract\AlphaRequest;

class ActionProcessor
{
    public function process(AlphaRequest $request): AlphaResponse
    {
        return new AlphaResponse(
            'Result from endobiontic process',
            ['desc' => 'Endobiontic action was PROCESSED!'],
            $request
        );
    }
}
