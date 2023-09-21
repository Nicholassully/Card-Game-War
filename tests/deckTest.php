<?php

use PHPUnit\Framework\TestCase;
use src\Deck;

class deckTest extends TestCase
{
    public function testCreateDeckWIllReturn52Cards(): void
    {
        $gameWar = new Deck();
        $result = count($gameWar->create());
        $this->assertEquals(52, $result);
    }
}