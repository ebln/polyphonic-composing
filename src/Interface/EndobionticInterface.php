<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Interface;

interface EndobionticInterface
{
    public const ALLOWED_RESULTS = [
        EndobionticResult::class,
        ExobionticRequest::class,
    ];
}
