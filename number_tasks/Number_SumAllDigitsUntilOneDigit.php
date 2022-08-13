<?php

function sumAllDigitsUntilOneDigit($n): void
{

    while ($n > 9){

        $digit = $n;
        $sum = 0;

        while ($digit > 0){

            $sum += (int)$digit % 10;
            $digit /= 10;
        }
        echo $sum , " ";

        $n = $sum;
    }
}

sumAllDigitsUntilOneDigit(797897);
