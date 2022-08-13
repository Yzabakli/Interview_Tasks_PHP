<?php

function sumOfDigitsOfInteger($n){

    $sum = 0;

    while ($n > 0){

        $sum += $n % 10;

        $n = (int) $n / 10;

    }

    return $sum;
}

$n = 1234;

echo sumOfDigitsOfInteger($n);