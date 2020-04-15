<?php

use App\Diamond;
use PHPUnit\Framework\TestCase;

class DiamondTest extends TestCase
{
    /** @test */
    public function it_returns_a_if_given_letter_a()
    {
        $diamond = Diamond::makeFrom('a');

        $this->assertEquals($diamond, "\na\n");
    }

    /** @test */
    public function it_prints_a_diamond_when_given_a_letter_b()
    {
        $diamond = Diamond::makeFrom('b');
        $diamondString = '';

        $diamondString .= " a \n";
        $diamondString .= "b b\n";
        $diamondString .= " a ";

        $this->assertEquals($diamond, $diamondString);
    }

    /** @test */
    public function it_prints_a_diamond_when_given_letter_c()
    {
        $diamond = Diamond::makeFrom('c');
        $diamondString = '';

        $diamondString .= "  a  \n";
        $diamondString .= " b b \n";
        $diamondString .= "c   c\n";
        $diamondString .= " b b \n";
        $diamondString .= "  a  ";

        $this->assertEquals($diamond, $diamondString);
    }

    /** @test */
    public function it_prints_diamond_when_given_letter_d()
    {
        $diamond = Diamond::makeFrom('d');
        $diamondString = '';

        $diamondString .= "   a   \n";
        $diamondString .= "  b b  \n";
        $diamondString .= " c   c \n";
        $diamondString .= "d     d\n";
        $diamondString .= " c   c \n";
        $diamondString .= "  b b  \n";
        $diamondString .= "   a   ";

        $this->assertEquals($diamond, $diamondString);
    }

    /** @test */
    public function it_prints_diamond_when_given_letter_e()
    {
        $diamond = Diamond::makeFrom('e');
        $diamondString = '';

        $diamondString .= "    a    \n";
        $diamondString .= "   b b   \n";
        $diamondString .= "  c   c  \n";
        $diamondString .= " d     d \n";
        $diamondString .= "e       e\n";
        $diamondString .= " d     d \n";
        $diamondString .= "  c   c  \n";
        $diamondString .= "   b b   \n";
        $diamondString .= "    a    ";

        $this->assertEquals($diamond, $diamondString);
    }

    /** @test */
    public function it_prints_a_diamond_when_given_letter_h()
    {
        $diamond = Diamond::makeFrom('h');
        $diamondString = '';

        $diamondString .= "       a       \n";
        $diamondString .= "      b b      \n";
        $diamondString .= "     c   c     \n";
        $diamondString .= "    d     d    \n";
        $diamondString .= "   e       e   \n";
        $diamondString .= "  f         f  \n";
        $diamondString .= " g           g \n";
        $diamondString .= "h             h\n";
        $diamondString .= " g           g \n";
        $diamondString .= "  f         f  \n";
        $diamondString .= "   e       e   \n";
        $diamondString .= "    d     d    \n";
        $diamondString .= "     c   c     \n";
        $diamondString .= "      b b      \n";
        $diamondString .= "       a       ";

        $this->assertEquals($diamond, $diamondString);
    }
}
