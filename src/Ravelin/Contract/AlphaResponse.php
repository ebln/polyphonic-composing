<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Ravelin\Contract;

class AlphaResponse implements ResponseInterface
{
    public function __construct(public string $token, public array $data, public AlphaRequest $request)
    {
    }
}
