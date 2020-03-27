<?php

namespace App;

class MoneyConverter
{
    const CURRENCY = 'dollar';

    const WORDS_FROM_NUMBERS = [
        0                   => 'zero',
        1                   => 'one',
        2                   => 'two',
        3                   => 'three',
        4                   => 'four',
        5                   => 'five',
        6                   => 'six',
        7                   => 'seven',
        8                   => 'eight',
        9                   => 'nine',
        10                  => 'ten',
        11                  => 'eleven',
        12                  => 'twelve',
        13                  => 'thirteen',
        14                  => 'fourteen',
        15                  => 'fifteen',
        16                  => 'sixteen',
        17                  => 'seventeen',
        18                  => 'eighteen',
        19                  => 'nineteen',
        20                  => 'twenty',
        30                  => 'thirty',
        40                  => 'fourty',
        50                  => 'fifty',
        60                  => 'sixty',
        70                  => 'seventy',
        80                  => 'eighty',
        90                  => 'ninety',
        100                 => 'hundred',
        1000                => 'thousand',
        1000000             => 'million',
        1000000000          => 'billion',
        1000000000000       => 'trillion',
    ];

    public static function convert(int $amount): string
    {
        $currency = static::CURRENCY;
        $string = static::toWords($amount);
        $words = explode(' ', $string);

        if ($words[count($words) - 1] !== 'one') {
            $currency = $currency . 's';
        }

        return implode(' ', $words) . ' ' . $currency;
    }

    public static function toWords(int $amount): string
    {
        $words = [];
        $string = '';

        while (true) {
            if ($amount < 21) {
                $string .= static::WORDS_FROM_NUMBERS[$amount];
                break;
            }

            if ($amount < 100) {
                $tens = floor($amount / 10) * 10;
                $remainder = $amount % 10;
                $string .= static::WORDS_FROM_NUMBERS[$tens];
                if ($remainder) {
                    $string .= ' ' . static::WORDS_FROM_NUMBERS[$remainder];
                }
                break;
            }

            if ($amount < 1000) {
                $hundreds = $amount / 100;
                $remainder = $amount % 100;
                $string .= static::WORDS_FROM_NUMBERS[$hundreds] . ' ' . static::WORDS_FROM_NUMBERS[100];
                if ($remainder) {
                    $string .= ' ' . static::toWords($remainder);
                }
                break;
            }

            $logarithm = log($amount, 1000);
            $base = 1000 ** floor($logarithm);
            $num = (int) $amount / $base;
            $remainder = $amount % $base;
            $string .= static::toWords($num) . ' ' . static::WORDS_FROM_NUMBERS[$base];
            if ($remainder) {
                $string .= ' ' . static::toWords($remainder);
            }
            break;
        }

        return $string;
    }
}
