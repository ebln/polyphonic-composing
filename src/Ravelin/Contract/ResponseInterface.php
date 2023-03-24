<?php

declare(strict_types=1);

namespace Ebln\PolyphonicComposing\Ravelin\Contract;

interface ResponseInterface
{
    public const ALLOWED_RESULTS = [
        AlphaResponse::class,
        AlphaRequest::class,
    ];
}
