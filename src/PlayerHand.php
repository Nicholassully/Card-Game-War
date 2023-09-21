<?php

declare(strict_types=1);

namespace src;

use Exception;

class PlayerHand
{
    private string $player;
    private array $hand;

    public function __construct(array $deck, string $name)
    {
        $this->hand = $deck;
        $this->player = $name;
        return $this;
    }

    public function deal(int $amount = 1)
    {
        if (count($this->hand) < 3 && $amount = 2) {
          throw new Exception($this->getPlayer() . ' has lost');
        }

        if (count($this->hand) === 0) {
           throw new Exception($this->getPlayer() . ' has lost');
        }

        $cardFromHand[] = array_shift($this->hand);
        if ($amount != 1) {
            $cardFromHand[] = array_shift($this->hand);
            $cardFromHand[] = array_shift($this->hand);
            return $cardFromHand;
        }
        return $cardFromHand;
    }

    public function getPlayer(): string
    {
        return $this->player;
    }

    public function add(array $cards)
    {
        $this->hand = array_merge($this->hand, $cards);
    }
}