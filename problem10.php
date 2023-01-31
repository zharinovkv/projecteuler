<?php

function problem10($max = 2000000)
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

    function findPrimes($max)
    {
        $primes = [];

        for ($i = 0; $i <= $max; $i++) {
            if (isPrime($i)) {
                array_push($primes, $i);
            }
        }
        return $primes;
    }

    $primes = findPrimes($max);
    return array_sum($primes);
}

echo problem10();