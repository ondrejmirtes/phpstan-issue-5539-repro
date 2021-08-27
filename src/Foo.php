<?php

declare(strict_types=1);

namespace App;

if (class_exists(FooInterface::class)) {
	class Foo implements FooInterface
	{
		public function test(): void
		{
		}
	}

} else {
	class Foo
	{
		public function test(): bool
		{
			return false;
		}
	}
}
