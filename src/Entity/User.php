<?php

declare(strict_types=1);

namespace App\Entity;

class User
{
    public function __construct(public string $name, public int $age)
    {
    }
}
