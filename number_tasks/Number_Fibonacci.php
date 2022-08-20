<?php

function fibonacci($number): int{

    $j = 0; $z = 1;

    for ($i = 1; $i < $number; $i++){

        $z += $j;

        $j = $z - $j;
    }
    return $z;
}

echo fibonacci(10);