<?php

declare(strict_types=1);

namespace src;

class WarGame
{
    private array $cardsInMiddle = [];
    private bool $gameOver = false;
    private PlayerHand $playerOneHand;
    private PlayerHand $playerTwoHand;

    public function playTheGame(): void
    {
        $deck = new Deck();
        $deckOfCards = $deck->create();
        shuffle($deckOfCards);
        $shuffledDeckOfCards = array_slice($deckOfCards, 0, count($deckOfCards));
        $this->playerOneHand = new PlayerHand(
            array_slice($shuffledDeckOfCards, 0, count($deckOfCards) / 2),
            "Player One"
        );
        $this->playerTwoHand = new PlayerHand(array_slice($shuffledDeckOfCards, count($deckOfCards) / 2), "Player Two");

        while (!$this->gameOver) {
            $this->playARound();
        };
    }

    private function playARound()
    {
        $playerOneCard = $this->playerOneHand->deal();
        $playerTwoCard = $this->playerTwoHand->deal();

        if (!$playerOneCard || !$playerTwoCard) {
            $this->gameOver = true;
            return;
        }

        $this->cardsInMiddle = array_merge($this->cardsInMiddle, $playerTwoCard, $playerOneCard);

        if ($playerOneCard[0]->getValue() === $playerTwoCard[0]->getValue()) {
            $this->cardsInMiddle = array_merge(
                $this->cardsInMiddle,
                $this->playerOneHand->deal(2),
                $this->playerTwoHand->deal(2)
            );
            $this->playARound();
        }

        if ($playerOneCard[0]->getValue() > $playerTwoCard[0]->getValue()) {
            $this->playerOneHand->add($this->cardsInMiddle);
        } else {
            $this->playerTwoHand->add($this->cardsInMiddle);
        }

        $this->cardsInMiddle = [];
    }
}