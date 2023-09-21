<?php

use PHPUnit\Framework\TestCase;
use src\WarGame;

class warGameTest extends TestCase
{

    public function testCreateDeckWIllReturn52Cards(): void
    {
        $this->expectExceptionMessageMatches('/Player/');
        $gameWar = new WarGame();
        $gameWar->playTheGame();
//        $this->assertEquals(6, count($gameWar->createDeck()));
//        $this->assertEquals(52, count($gameWar->createDeck()));
    }

//    public function testCreateDeckWIllReturn52Cards(): void
//    {
//        $gameWar = new WarGame();
//        $this->assertEquals(52, count($gameWar->createDeck()));
//    }
//
//    public function testPlayersHandsWIllReturn26CardsInEach(): void
//    {
//        $gameWar = new WarGame();
//        $cards = $gameWar->createDeck();
//        $this->assertEquals(26, count($gameWar->playersHands($cards)[0]));
//        $this->assertEquals(26, count($gameWar->playersHands($cards)[1]));
//    }
//
//    public function testPlayARoundWillReturnSameIfTheyAreTheSame()
//    {
//        $gameWar = new WarGame();
//        $playersHands = [['1S'], ['1H']];
//        $this->assertEquals([['1S', '1H'], []], $gameWar->playRound($playersHands));
//    }
//
//    public function testPlayARoundWillReturnLostToPlayerOne()
//    {
//        $gameWar = new WarGame();
//        $playersHands = [['1S'], ['2S']];
//        $this->assertEquals([[], ['2S', '1S']], $gameWar->playRound($playersHands));
//    }
//
//    public function testPlayARoundWillReturnWonToPlayerOne()
//    {
//        $gameWar = new WarGame();
//        $playersHands = [['7S'], ['2S']];
//        $this->assertEquals([['7S', '2S'], []], $gameWar->playRound($playersHands));
//    }
//
//    public function testCheckWinnerWillReturnCarryOnForNoWinners(): void
//    {
//        $gameWar = new WarGame();
//        $playersHands = [['1S'], ['1H']];
//        $this->assertEquals('Carry on the game', $gameWar->checkForWinner($playersHands));
//    }
//
//    public function testCheckWinnerWillReturnPlayerOneWinner(): void
//    {
//        $gameWar = new WarGame();
//        $playersHands = [[], ['2S', '1S']];
//        $this->assertEquals('Player two has won', $gameWar->checkForWinner($playersHands));
//    }
//
//
//    public function testCheckWinnerWillReturnPlayerTwoWinner(): void
//    {
//        $gameWar = new WarGame();
//        $playersHands = [['7S', '2S'], []];
//        $this->assertEquals('Player one has won', $gameWar->checkForWinner($playersHands));
//    }
}