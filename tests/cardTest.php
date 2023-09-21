<?php

use PHPUnit\Framework\TestCase;
use src\Card;
use src\Deck;

class cardTest extends TestCase
{
    public function testCreateCard(): void
    {
        $card = new Card('S', 1);
        $this->assertEquals(1, $card->getValue());
    }
}