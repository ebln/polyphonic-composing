<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Service;

class ExobionticService
{
    public function __construct()
    {
        // $foo = new Ebln\ParasiteDemo\Endobiont\EndobionticService(); // expected to fail!
    }

    public function act(): string
    {
        return 'Exobiontic action!';
    }
}