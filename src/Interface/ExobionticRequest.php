<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Interface;

class ExobionticRequest
{
    public function __construct(public string $topic, public array $payload)
    {
    }
}
