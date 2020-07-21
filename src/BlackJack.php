<?php

namespace App;

class BlackJack
{
    const FIGURES = ["Q", "K", "J"];

    public function play(array $cardDesks): string
    {
        $playerScore = $this->getScore($cardDesks[0]);
        $bankScore = $this->getScore($cardDesks[1]);

        if ($playerScore == $bankScore || $bankScore > 21 && $playerScore > 21) {
            return "par";
        }
        if ($playerScore > $bankScore && $playerScore <=21 || $bankScore > 21) {
            return "player";
        }
        return "bank";

    }

    private function getScore(array $cards): int
    {
        $score = 0;
        $nbAce = 0;

        foreach ($cards as $card) {
            if (in_array($card, self::FIGURES)) {
                $score += 10;
            } elseif ($card == "A") {
                $score += 1;
                $nbAce++;
            } else {
                $score += intval($card);
            }
        }

        for ($i = 0; $i < $nbAce; $i++) {
            if ($score <= 11) {
                $score += 10;
            }
        }

        return $score;
    }
}