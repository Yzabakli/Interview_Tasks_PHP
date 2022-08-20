<?php

function maximumPossibleValue($number): int{

    $numberToString = "";

    if ($number > 0){

        $numberToString = strval($number);

        for ($i = 0; $i < strlen($numberToString); $i++){

            if (intval($numberToString[$i]) < 5){

                return intval(substr($numberToString, 0, $i) . 5 . substr($numberToString,$i));
            }
        }
        return intval($numberToString . 5);

    }elseif ($number < 0){

        $numberToString = strval($number);

        for ($i = 0; $i < strlen($numberToString); $i++){

            if (intval($numberToString[$i]) > 5){

                return intval(substr($numberToString, 0, $i) . 5 . substr($numberToString,$i));
            }
        }
        return intval($numberToString . 5);
    }
    return 50;
}

echo maximumPossibleValue(-267);