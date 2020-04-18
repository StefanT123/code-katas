<?php

namespace App;

/**
 * @see http://codingdojo.org/kata/NumberToLCD/
 */
class NumberToLCD
{
    protected static $numbers = [
        0 => [' _ ', '| |', '|_|'],
        1 => ['   ', '  |', '  |'],
        2 => [' _ ', ' _|', '|_ '],
        3 => [' _ ', ' _|', ' _|'],
        4 => ['   ', '|_|', '  |'],
        5 => [' _ ', '|_ ', ' _|'],
        6 => [' _ ', '|_ ', '|_|'],
        7 => [' _ ', '  |', '  |'],
        8 => [' _ ', '|_|', '|_|'],
        9 => [' _ ', '|_|', ' _|'],
    ];

    public static function convert(int $number): string
    {
        $digits = str_split($number);
        $toLCD = '';

        for ($i = 0; $i < 3; $i++) {
            foreach ($digits as $digit) {
                $toLCD .= self::$numbers[$digit][$i];
            }

            $toLCD .= "\n";
        }

        return $toLCD;
    }
}
