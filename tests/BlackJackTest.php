<?php

namespace App;

use App\BlackJack;
use PHPUnit\Framework\TestCase;

class BlackJackTest extends TestCase
{
    public function test1()
    {
        $cardDesks = [
          [5,6,3],
          [8,9]
        ];
        $blackjack = new BlackJack();
        $result = $blackjack->play($cardDesks);
        $this->assertEquals('bank', $result);
    }

    public function test2()
    {
        $cardDesks = [
            [9,"K"],
            [8,9]
        ];
        $blackjack = new BlackJack();
        $result = $blackjack->play($cardDesks);
        $this->assertEquals('player', $result);
    }

    public function test3()
    {
        $cardDesks = [
            [9,"K"],
            ["A",9]
        ];
        $blackjack = new BlackJack();
        $result = $blackjack->play($cardDesks);
        $this->assertEquals('bank', $result);
    }

    public function test4()
    {
        $cardDesks = [
            [9,7],
            [7,9]
        ];
        $blackjack = new BlackJack();
        $result = $blackjack->play($cardDesks);
        $this->assertEquals('par', $result);
    }

    public function test5()
    {
        $cardDesks = [
            [9,"K",5],
            ["A",9]
        ];
        $blackjack = new BlackJack();
        $result = $blackjack->play($cardDesks);
        $this->assertEquals('bank', $result);
    }

    public function test6()
    {
        $cardDesks = [
            [9,"K"],
            ["A",9,4]
        ];
        $blackjack = new BlackJack();
        $result = $blackjack->play($cardDesks);
        $this->assertEquals('player', $result);
    }

    public function test7()
    {
        $cardDesks = [
            [9,"K"],
            ["A",4,"A","A",4]
        ];
        $blackjack = new BlackJack();
        $result = $blackjack->play($cardDesks);
        $this->assertEquals('bank', $result);
    }

    public function test8()
    {
        $cardDesks = [
            ["Q","Q","Q"],
            ["J","J","J"]
        ];
        $blackjack = new BlackJack();
        $result = $blackjack->play($cardDesks);
        $this->assertEquals('par', $result);
    }

    public function test9()
    {
        $cardDesks = [
            ["Q","Q","Q","Q"],
            ["J","J","J"]
        ];
        $blackjack = new BlackJack();
        $result = $blackjack->play($cardDesks);
        $this->assertEquals('par', $result);
    }
}