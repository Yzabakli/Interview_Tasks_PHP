<?php
function factorialNumber($number): float|int
{
    if ($number == 0){
        return 1;
    }
    return $number * factorialNumber($number - 1);
}

function factorialNumber2($number): float|int
{
    $factor = 1;

    while ($number >= 2){

        $factor *= $number;
        $number--;
    }
    return $factor;
}

echo factorialNumber2(10);
