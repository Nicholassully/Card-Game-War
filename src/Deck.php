<?php

declare(strict_types=1);

namespace src;

class Deck
{
    public function create(): array
    {
        $values = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
        $suits = ['S', 'H', 'D', 'C'];

        $cards = [];
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $cards[] = new Card($suit, $value);
            }
        }

        return $cards;
    }
}
