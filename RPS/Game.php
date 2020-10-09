<?php

class Game
{
    private int $userKey;
    private int $pcKey;

    public function __construct(int $userKey, int $pcKey)
    {
        $this->userKey = $userKey;
        $this->pcKey = $pcKey;
    }

    public function play(array $winCombinations): string
    {
        for ($i = 0; $i < count($winCombinations); $i++) {
            if ($this->userKey === $this->pcKey) {
                return "It's a tie!";
            } elseif (in_array(
                $this->pcKey,
                $winCombinations[$this->userKey]
            )) {
                return 'You win!';
            } else {
                return 'You lose!';
            }
        }
    }
}
