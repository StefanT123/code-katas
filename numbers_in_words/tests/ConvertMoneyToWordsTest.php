<?php

use App\MoneyConverter;
use PHPUnit\Framework\TestCase;

class ConvertMoneyToWordsTest extends TestCase
{
    /**
     * @test
     * @dataProvider amounts
     */
    public function it_converts_amount_of_one_dollar_into_word($amount, $word)
    {
        $this->assertEquals($word, MoneyConverter::convert($amount));
    }

    public function amounts()
    {
        return [
            [1, 'one dollar'],
            [2, 'two dollars'],
            [3, 'three dollars'],
            [4, 'four dollars'],
            [5, 'five dollars'],
            [6, 'six dollars'],
            [7, 'seven dollars'],
            [10, 'ten dollars'],
            [11, 'eleven dollars'],
            [12, 'twelve dollars'],
            [13, 'thirteen dollars'],
            [14, 'fourteen dollars'],
            [15, 'fifteen dollars'],
            [16, 'sixteen dollars'],
            [17, 'seventeen dollars'],
            [18, 'eighteen dollars'],
            [19, 'nineteen dollars'],
            [21, 'twenty one dollar'],
            [22, 'twenty two dollars'],
            [33, 'thirty three dollars'],
            [87, 'eighty seven dollars'],
            [99, 'ninety nine dollars'],
            [100, 'one hundred dollars'],
            [103, 'one hundred three dollars'],
            [110, 'one hundred ten dollars'],
            [111, 'one hundred eleven dollars'],
            [120, 'one hundred twenty dollars'],
            [345, 'three hundred fourty five dollars'],
            [500, 'five hundred dollars'],
            [745, 'seven hundred fourty five dollars'],
            [888, 'eight hundred eighty eight dollars'],
            [1000, 'one thousand dollars'],
            [1001, 'one thousand one dollar'],
            [1100, 'one thousand one hundred dollars'],
            [1110, 'one thousand one hundred ten dollars'],
            [3573, 'three thousand five hundred seventy three dollars'],
            [9886, 'nine thousand eight hundred eighty six dollars'],
            [10100, 'ten thousand one hundred dollars'],
            [345768, 'three hundred fourty five thousand seven hundred sixty eight dollars'],
            [2345768, 'two million three hundred fourty five thousand seven hundred sixty eight dollars'],
            [67567567, 'sixty seven million five hundred sixty seven thousand five hundred sixty seven dollars']
        ];
    }
}
