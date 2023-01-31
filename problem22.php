<?php

function problem22($path = "./p022_names.txt")
{
    $alfabet = [
        "a",
        "b",
        "c",
        "d",
        "e",
        "f",
        "g",
        "h",
        "i",
        "j",
        "k",
        "l",
        "m",
        "n",
        "o",
        "p",
        "q",
        "r",
        "s",
        "t",
        "u",
        "v",
        "w",
        "x",
        "y",
        "z"
    ];

    function getNames($path)
    {
        $file = file_get_contents($path);
        $names = explode(",", $file);
        $cleared = array_map(fn($name) => strtolower(substr($name, 1, strlen($name) - 2)), $names);
        sort($cleared);
        return $cleared;
    }

    function calcSumIndexesChars($name, $alfabet)
    {
        $reduced = array_reduce(
            str_split($name, 1),
            function ($acc, $char) use ($alfabet) {
                $index = array_search($char, $alfabet);
                $acc += $index + 1;
                return $acc;
            },
            0
        );
        return $reduced;
    }

    function calcProducts($names, $alfabet)
    {
        $sums_by_name = array_map(function ($name) use ($alfabet) {
            return calcSumIndexesChars($name, $alfabet);
        }, $names);
        return array_map(fn($k, $v) => ($k + 1) * $v, array_keys($sums_by_name), array_values($sums_by_name));
    }

    $names = getNames($path);
    $calcProducts = calcProducts($names, $alfabet);
    return array_sum($calcProducts);
}

echo problem22();