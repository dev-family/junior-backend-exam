<?php

declare(strict_types = 1);

namespace App\Services\ResponseClass;

class ResponseClass implements Response
{
    use Convert;

    public function __construct(
        protected string $name = 'Foo',
        protected string $description = 'Bar',
    ) {
    }

    public function __toString(): string
    {
        return "Name: $this->name | Description: $this->description";
    }
}
