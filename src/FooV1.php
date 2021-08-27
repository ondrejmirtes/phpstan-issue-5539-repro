<?php

declare(strict_types=1);

namespace App;

class FooV1 implements FooInterface
{
    public function test(): bool
    {
        return false;
    }
}
