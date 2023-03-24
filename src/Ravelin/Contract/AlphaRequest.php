<?php

declare(strict_types=1);

namespace Ebln\PolyphonicComposing\Ravelin\Contract;

final class AlphaRequest
{
    public function __construct(public string $topic, public array $payload)
    {
    }
}
