<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Service;

use Ebln\Composer\Debug\ProvokeConflict\Creed;

class ExobionticService
{
    public function __construct()
    {
        // TODO
        // $foo = new Ebln\ParasiteDemo\Endobiont\EndobionticService(); // expected to fail!
    }

    public function act(): string
    {
        return 'Exobiontic composer flavour: ' . Creed::AVOWAL;
    }
}
