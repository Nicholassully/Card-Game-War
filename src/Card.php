<?php

declare(strict_types=1);

namespace src;

class Card
{
    private string $suit;

    private int $value;

    public function __construct(string $suit, int $value)
    {
        $this->suit = $suit;
        $this->value = $value;
        return $this;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}