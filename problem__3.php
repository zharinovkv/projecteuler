<?php

function problem3($num = 13195) //600851475143 

{
    function isPrime($number)
    {
        if ($number < 2) {
            return false;
        }

        if ($number == 2) {
            return true;
        }

        if ($number > 2) {
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    return false;
                }
            }
        }
        return true;
    }


    $prime = 0;
    for ($i = round($num / 2); $i >= 1; $i--) {
        if (isPrime($i) == true) {
            if ($num % $i == 0) {
                $prime = $i;
                break;
            }
        }
    }
    return $prime;
}


echo problem3();