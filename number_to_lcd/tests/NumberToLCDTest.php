<?php

use App\NumberToLCD;
use PHPUnit\Framework\TestCase;

class NumberToLCDTest extends TestCase
{
    /**
     * @test
     * @dataProvider numbers
     */
    public function convert_0_to_LCD($number, $toLCD)
    {
        $this->assertEquals($toLCD, NumberToLCD::convert($number));
    }

    public function numbers()
    {
        return [
            [0, " _ \n| |\n|_|\n"],
            [1, "   \n  |\n  |\n"],
            [2, " _ \n _|\n|_ \n"],
            [3, " _ \n _|\n _|\n"],
            [4, "   \n|_|\n  |\n"],
            [5, " _ \n|_ \n _|\n"],
            [6, " _ \n|_ \n|_|\n"],
            [7, " _ \n  |\n  |\n"],
            [8, " _ \n|_|\n|_|\n"],
            [9, " _ \n|_|\n _|\n"],
            [10, "    _ \n  || |\n  ||_|\n"],
            [54, " _    \n|_ |_|\n _|  |\n"],
            [7394, " _  _  _    \n  | _||_||_|\n  | _| _|  |\n"],
        ];
    }
}
