<?php

function reverseInteger($num): int{

    $temp = 0;

    while((int)$num != 0){

        $temp = $temp * 10 + (int) $num % 10;
        $num /= 10;
    }
    return $temp;
}

echo reverseInteger(76347853496);