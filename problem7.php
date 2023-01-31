<?php

function problem7($number = 10001)
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

    function calcPrime($number)
    {
        $counter = 0;
        $primes = [];

        do {
            !isPrime($counter) ?: array_push($primes, $counter);
            $counter++;
        } while (count($primes) <= $number - 1);

        return $primes[count($primes) - 1];
    }

    return calcPrime($number);
}

echo problem7();