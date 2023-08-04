<?php

namespace Agissukmayadi\Belajar;

class Customer
{
    public function __construct(
        private string $name
    ) {
    }

    public function sayHello(): string
    {
        return "Hallo " . $this->name . PHP_EOL;
    }
}

?>