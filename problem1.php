<?php

function problem1($max = 1000)
{
    $range = range(0, $max - 1);

    $filtered_by_three = array_filter($range, fn($num) => $num % 3 == 0);
    $filtered_by_five = array_filter($range, fn($num) => $num % 5 == 0);
    $merged = array_merge($filtered_by_three, $filtered_by_five);
    $unique = array_unique($merged);

    return array_reduce($unique, function ($acc, $num) {
        return $acc + $num;
    }, 0);
}

echo problem1();