<?php

namespace App;

/**
 * @see http://codingdojo.org/kata/Diamond/
 */
class Diamond
{
    protected static $letters = 'abcdefghijklmnopqrstuvwxyz';

    public static function makeFrom(string $letter)
    {
        $stringArray = self::createArrayOfStrings($letter);

        $diamondMiddleString = array_pop($stringArray);

        $diamondString = implode("\n", $stringArray);
        $diamondString .= "\n{$diamondMiddleString}\n";
        $diamondString .= implode("\n", array_reverse($stringArray));

        return $diamondString;
    }

    protected static function createArrayOfStrings(string $letter): array
    {
        $letterPosition = strpos(self::$letters, $letter);
        $diamondRows = $letterPosition + $letterPosition + 1;
        $diamondHalf = round($diamondRows / 2);
        $stringArray = [];

        for ($i = 0; $i < $diamondHalf; $i++) {
            if ($i === 0) {
                $str = str_repeat(' ', $letterPosition);
                $str .= 'a';
                $str .= str_repeat(' ', $letterPosition);
                $stringArray[] = $str;

                $letterPosition--;
                continue;
            }

            $str = str_repeat(' ', $letterPosition);
            $str .= self::$letters[$i];
            $str .= str_repeat(' ', $diamondRows - ($letterPosition * 2) - 2);
            $str .= self::$letters[$i];
            $str .= str_repeat(' ', $letterPosition);
            $stringArray[] = $str;

            $letterPosition--;
        }

        return $stringArray;
    }
}
