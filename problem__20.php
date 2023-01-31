<?php
/* 
 * https://projecteuler.net/problem=20
 * test: 648 / 
 */

function problem20($max = 100)
{

    function factorial($max)
    {
        if ($max <= 1) {
            return 1;
        } else
            return ($max * Factorial($max - 1));
    }


    $factorial = factorial($max);
    $str = (string) number_format($factorial, 0, ".", "");

    echo $str . " ";

    $digits = str_split($str, 1);
    return array_sum($digits);

}

echo problem20();