<?php

function problem16($base = 2, $degree = 1000)
{
    $num = $base ** $degree;
    $str = (string) number_format($num, 2, ".", "");
    $digits = str_split($str, 1);
    return array_sum($digits);
}

echo problem16();