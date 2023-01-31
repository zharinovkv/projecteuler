<?php

function problem4($max = 999)
{
    function isPalindrom($num)
    {
        $chars = str_split($num, 1);
        do {
            if ($chars[0] != $chars[count($chars) - 1]) {
                return false;
            } else {
                array_shift($chars);
                array_pop($chars);
            }
        } while (count($chars) >= 1);
        return true;
    }

    function calcNumerics($max)
    {
        $products = [];
        for ($i = $max; $i >= 0; $i--) {
            for ($z = $max; $z >= 0; $z--) {
                array_push($products, $i * $z);
            }
        }
        sort($products, SORT_ASC);
        return $products;
    }

    function findPalindrom($products)
    {
        $index = count($products) - 1;
        do {
            $ispalindrom = isPalindrom($products[$index]);
            if ($ispalindrom == true) {
                return $products[$index];
            }
            $index--;
        } while ($index >= 0);
    }

    $products = calcNumerics($max);
    return findPalindrom($products);
}

echo problem4();