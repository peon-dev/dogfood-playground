<?php

declare(strict_types=1);

namespace PHPMateDogFood;

final class PropertiesPromotion
{
    private string $a;
    private string $b;

    public function __construct(
        string $a,
        string $b
    )
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA(): string
    {
        return $this->a;
    }

    public function getB(): string
    {
        return $this->b;
    }
}