<?php

declare(strict_types=1);

namespace App;

if (class_exists(FooInterface::class)) {
    class_alias(FooV1::class, 'App\\Foo');
} else {
    class_alias(FooV2::class, 'App\\Foo');
}
