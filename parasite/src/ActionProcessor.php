<?php

declare(strict_types=1);

namespace Ebln\ParasiteDemo\Endobiont;

use Ebln\ParasiteDemo\Interface\EndobionticResult;
use Ebln\ParasiteDemo\Interface\ExobionticRequest;

class ActionProcessor
{
    public function process(): EndobionticResult
    {
        $rawinput     = $_SERVER['argv'][1];
        $deserialized = unserialize($rawinput, ['allowed_classes' => [ExobionticRequest::class], 'max_depth' => 7]);

        return new EndobionticResult('EndobionticResult', ['desc' => 'Endobiontic action was PROCESSED!', 'input_raw' => $rawinput, 'deserialized' => $deserialized]);
    }
}
