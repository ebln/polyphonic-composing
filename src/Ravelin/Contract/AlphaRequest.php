<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Ravelin\Contract;

class AlphaRequest
{
    public function __construct(public string $topic, public array $payload)
    {
    }
}
