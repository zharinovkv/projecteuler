<?php

function problem2($max = 4000000)
{
    function fibonacci($max)
    {
        $fibonacci = [0, 1];
        while ($fibonacci[count($fibonacci) - 1] < $max) {
            array_push($fibonacci, $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2]);
        }
        ;
        array_pop($fibonacci);
        return $fibonacci;
    }

    $fibonacci = fibonacci($max);
    $filtered = array_filter($fibonacci, fn($num) => $num % 2 == 0);
    
    return array_reduce($filtered, fn($acc, $num) => $acc + $num, 0);
}

echo problem2();