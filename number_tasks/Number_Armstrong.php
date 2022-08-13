<?php

function is_armstrong(int $number): bool {

    $numberToString = str_split(strval($number));

    $power = strlen($number);

    $sum = 0;

    for ($i = 0; $i < $power; $i++){

        $sum += pow(intval($numberToString[$i]), $power);
    }

    return $sum == $number;
}

echo is_armstrong(34241);

