<?php

function problem6($max = 100)
{
    $range = range(1, $max);

    $sum_of_the_squares = array_reduce($range, function ($acc, $num) {
        return $acc + $num * $num;
    }, 0);

    $square_of_the_sum = array_reduce($range, function ($acc, $num) {
        return $acc + $num;
    }, 0);

    return $square_of_the_sum * $square_of_the_sum - $sum_of_the_squares;
}

echo problem6();