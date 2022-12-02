<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Endobiont;

class EndobionticService
{
    public function __construct(private ActionProcessor $actionProcessor)
    {
    }

    public function act(): string
    {
        return $this->actionProcessor->process();
    }
}
