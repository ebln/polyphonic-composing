<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Interface;

class EndobionticResult implements EndobionticInterface
{
    public function __construct(public string $token, public array $data)
    {
    }
}
