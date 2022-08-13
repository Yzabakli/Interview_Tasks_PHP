<?php

function divide($dividend, $divisor): array
{

    $quotient = 0;

    while ($dividend > $divisor){

        $dividend -= $divisor;
        $quotient++;
    }
    return array("Quotient" => $quotient, "Remainder" => $dividend);
}

foreach (divide(75, 4) as $item => $value){

    echo $item . ": " . $value . " ";
}